<?php

namespace Uawa\Http\Controllers;

use Illuminate\Http\Request;
use Uawa\Http\Requests;
use Uawa\Categoria;
use Illuminate\Support\Facades\Redirect;
use Uawa\Http\Requests\CategoriaFormRequest;
use DB;
class CategoriaController extends Controller
{
    
    public function index(Request $request)
    {
    	if($request)
    	{
    		$consulta=trim($request->get('buscar'));
    		$categorias=DB::table('categorias')
    		->where('nombre','LIKE','%'.$consulta.'%')
    		->where('estado','=','1')
    		->paginate(10);
    		return view('admin.categorias.index', ["categorias"=>$categorias,"textoBusqueda"=>$consulta]);
    	}
    	
    }
    public function create()
    {
    	return view('admin.categorias.create');
    }
    public function store(CategoriaFormRequest $request)
    {
    	$categoria=new Categoria;
    	$categoria->nombre=$request->get('nombre');
    	$categoria->descripcion=$request->get('descripcion');
    	$categoria->estado='1';
    	$categoria->save();
    	return Redirect::to('admin/categorias');
    }

    public function show($id)
    {
    	return view('admin.categorias.show',["categoria"=>Categoria::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view('admin.categorias.edit',["categoria"=>Categoria::findOrFail($id)]);
    }

    public function update(CategoriaFormRequest $request, $id)
    {
    	$categoria=Categoria::findOrFail($id);
    	$categoria->nombre=$request->get('nombre');
    	$categoria->descripcion=$request->get('descripcion');
    	$categoria->estado='1';
    	$categoria->update();
    	return Redirect::to('admin/categorias');
    }

    public function destroy($id)
    {
		$categoria=Categoria::findOrFail($id);
    	$categoria->estado='0';
    	$categoria->update();
    	return Redirect::to('admin/categorias');
    }
}
