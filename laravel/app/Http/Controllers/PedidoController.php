<?php

namespace Uawa\Http\Controllers;

use Illuminate\Http\Request;
use Uawa\Http\Requests;
use Uawa\Pedido;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input; //para subir la imagen
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

//use Uawa\Http\Requests\ArticuloFormRequest;
use DB;
class PedidoController extends Controller
{
    
    public function index(Request $request)
    {
    	if($request)
    	{
    		$consulta=trim($request->get('buscar'));

    		$pedidos=DB::table('pedidos')
            ->orderBy('id','desc')
    		->paginate(10);


    		return view('admin.pedidos.index', ["pedidos"=>$pedidos,"textoBusqueda"=>$consulta]);
    	}

    	
    }
    public function create()
    {
        $usuarios=DB::table('users')->where('activo','=',1)->get();
        $metodosEnvio=DB::table('metodos_envio')->where('activo','=',1)->get();
        $cupones=DB::table('cupones_descuento')->where('activo','=',1)->get();
    	return view('admin.pedidos.create', ["usuarios"=>$usuarios,"metodosEnvio"=>$metodosEnvio,"cupones"=>$cupones]);
    }
    public function store(PedidoFormRequest $request)
    {
        //CREA NUEVO PEDIDO
    	$pedido=new Pedido;
        $pedido->nombre=$request->get('nombre');
        $pedido->deCategoria=$request->get('deCategoria');
        $pedido->codigoPedido=$request->get('codigoPedido');
    	$pedido->descripcion=$request->get('descripcion');
        $pedido->coste=$request->get('coste');
        $pedido->pvp=$request->get('pvp');
        $pedido->codigo=generarCodigo(5);
    	$pedido->estado='1';
    	$pedido->save();
    	return Redirect::to('admin/articulos');
    }

    public function show($id)
    {
    	return view('admin.pedidos.show',["pedido"=>Pedido::findOrFail($id)]);
    }

    public function edit($id)
    {
        $pedido=Pedido::findOrFail($id);
        $categorias=DB::table('categorias')->where('estado','=','1')->get();
    	return view('admin.pedidos.edit',["pedido"=>$pedido,"categorias"=>$categorias]);
    }

    public function update(PedidoFormRequest $request, $id)
    {
    	$pedido=Pedido::findOrFail($id);
    	$pedido->deCategoria=$request->get('categoria');
        $pedido->codigo=rand(15);
        $pedido->nombre=$request->get('nombre');
        $pedido->descripcion=$request->get('descripcion');
        

        if(Input::hasFile('imagen')){
            $file=Input::File('imagen');
            $file=move(public_path().'/imagenes/pedidos/'.$file->getClientOriginalName());
            $pedido->imagen=$file->getClientOriginalName();
        }
    	$pedido->update();
    	return Redirect::to('admin/pedidos');
    }

    public function destroy($id)
    {
		$pedido=Pedido::findOrFail($id);
    	$pedido->estado='0';
    	$pedido->update();
    	return Redirect::to('admin/pedidos');
    }
}
