<?php

namespace Uawa\Http\Controllers;

use Illuminate\Http\Request;
use Uawa\Http\Requests;
use Uawa\Articulo;
use Uawa\ArticuloImagen;
use Uawa\ArticuloVariacion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input; //para subir la imagen
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use Uawa\Http\Requests\ArticuloFormRequest;
use DB;

use Illuminate\Support\Str;
class ArticuloController extends Controller
{
    
    public function index(Request $request)
    {
    	if($request)
    	{
    		$consulta=trim($request->get('buscar'));

    		$articulos=DB::table('articulos as a')
            ->join('categorias as c', 'c.id', '=', 'a.deCategoria')
            ->select('a.id','a.nombre','a.codigo','a.pvp','c.nombre as categoria','a.estado','a.tipo')
    		->where('a.estado','=', 1)
            //SI SE EJECUTA EL OR WHERE NO SE PAGINAN BIEN LOS ARTICULOS ACTIVOS
            //->orWhere('a.nombre','LIKE','%'.$consulta.'%')
            //->orWhere('a.codigo','LIKE','%'.$consulta.'%')
            ->groupBy('a.id')
            ->orderBy('a.id','desc')
    		->paginate(10);
    		return view('admin.articulos.index', ["articulos"=>$articulos,"textoBusqueda"=>$consulta]);
    	}

    	
    }
    public function create()
    {
        //PASA CATEGORIAS
        $categorias=DB::table('categorias')->where('estado','=','1')->get();

        //PASA CODIGO ALEATORIO
        $codi = substr(md5(uniqid(mt_rand(), true)) , 0, 5);
        $codi = generarCodigo(8);
    	return view('admin.articulos.create', ["categorias"=>$categorias,"codi"=>$codi]);
    }

    protected function storeUpdate(ArticuloFormRequest $request, $var, $id = null){
        //CREA/modifica  ARTICULO

        if($var == "store"){
            $articulo=new Articulo;
        }
        else
        {
            $articulo=Articulo::findOrFail($id);
        }


        $articulo->slug=Str::slug($request->get('nombre'), '-');
        $articulo->codigo=$request->get('codigo');
        $articulo->deCategoria=$request->get('deCategoria');
        $articulo->nombre=$request->get('nombre');
        $articulo->descripcion=$request->get('descripcion');
        $articulo->tipo=$request->get('tipo');
        $articulo->talla_0=$request->get('talla_0');
        $articulo->talla_2=$request->get('talla_2');
        $articulo->talla_4=$request->get('talla_4');
        $articulo->talla_6=$request->get('talla_6');
        $articulo->talla_8=$request->get('talla_8');
        $articulo->talla_10=$request->get('talla_10');
        $articulo->talla_12=$request->get('talla_12');
        $articulo->talla_14=$request->get('talla_14');
        $articulo->talla_m_s=$request->get('talla_m_s');
        $articulo->talla_m_m=$request->get('talla_m_m');
        $articulo->talla_m_l=$request->get('talla_m_l');
        $articulo->talla_m_xl=$request->get('talla_m_xl');
        $articulo->talla_h_s=$request->get('talla_h_s');
        $articulo->talla_h_m=$request->get('talla_h_m');
        $articulo->talla_h_l=$request->get('talla_h_l');
        $articulo->talla_h_xl=$request->get('talla_h_xl');
        $articulo->talla_h_xxl=$request->get('talla_h_xxl');
        $articulo->talla_h_xxxl=$request->get('talla_h_xxxl');

        $articulo->stock_otros=$request->get('stock_otros');
        $articulo->color=$request->get('color');
        $articulo->coste=$request->get('coste');
        $articulo->pvp=$request->get('pvp');
        $articulo->estado='1';

        if($var == "store"){
            $articulo->save();
        }
        else
        {
            $articulo->update();
        }

        //CREA REGISTROS DE IMAGENES
        if($request->file('imagenesVariacion'))
        {
            $imagenes = $request->file('imagenesVariacion');
        }
        else
        {
            $imagenes = $request->file('imagenesOtros');
        }
        if(is_array($imagenes))
        {
                foreach($imagenes as $img)
                {
                    $nombre = uniqid().'.'.$img->getClientOriginalExtension();
                    $img->move(storage_path('app/public/articulo_miniatura'), $nombre);

                    //CREA REGISTRO
                    $imag = new ArticuloImagen;
                    $imag->deArticulo=$articulo->id;
                    $imag->imagen=$nombre;

                        //BUSCA SI EXISTE ALGUN DESTACADO DEL ARTICULO
                        $destacadoExiste=DB::table('articulos as a')
                        ->join('articulos_imagenes as ai', 'ai.deArticulo', '=', 'a.id')
                        ->select('ai.destacado')
                        ->where('ai.destacado','=','1')
                        ->where('a.id','=',$articulo->id)
                        ->count();

                        if($destacadoExiste>0)
                        {
                            //SI EXISTE
                            $imag->destacado=0;
                        }
                        else
                        {
                            //SI NO EXISTE
                            $imag->destacado=1;
                        }
                    
                    $imag->save();
                
                }
        }


    }

    public function store(ArticuloFormRequest $request)
    {
        //LLAMA FUNCION QUE ACTUALIZA O GUARDA
        $this->storeUpdate($request, "store");
    	return Redirect::to('admin/articulos');
    }

    public function show($id)
    {
    	return view('admin.articulos.show',["articulo"=>Articulo::findOrFail($id)]);
    }

    public function edit($id)
    {
        $articulo=Articulo::findOrFail($id);
        $categorias=DB::table('categorias')->where('estado','=','1')->get();
        $imagenes=DB::table('articulos_imagenes')
        ->where('deArticulo','=', $id)
        ->get();

    	return view('admin.articulos.edit',["articulo"=>$articulo,"categorias"=>$categorias,"imagenes"=>$imagenes]);
    }

    public function update(ArticuloFormRequest $request, $id)
    {
    	 //LLAMA FUNCION QUE ACTUALIZA O GUARDA
        $this->storeUpdate($request, "update", $id);
    	return Redirect::to('admin/articulos');
    }

    public function destroy($id)
    {
		$articulo=Articulo::findOrFail($id);
    	$articulo->estado='0';
    	$articulo->update();
    	return Redirect::to('admin/articulos');
    }




}
