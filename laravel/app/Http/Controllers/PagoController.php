<?php

namespace Uawa\Http\Controllers;

use Illuminate\Http\Request;
use Uawa\Http\Requests;
use Uawa\Pago;
use Illuminate\Support\Facades\Redirect;
use Uawa\Http\Requests\PagarFormRequest;
use DB;
class PagoController extends Controller
{
    
    public function index(Request $request)
    {
    	if($request)
    	{
    		$consulta=trim($request->get('buscar'));
    		$pagos=DB::table('pedidos_pagos')
    		->where('dePedido','LIKE','%'.$consulta.'%')
    		->paginate(10);
    		return view('admin.pagos.index', ["pagos"=>$pagos,"textoBusqueda"=>$consulta]);
    	}
    	
    }
    public function create()
    {
    	return view('admin.categorias.create');
    }
    public function store(CategoriaFormRequest $request)
    {
    	$pago=new Pago;
    	$pago->formaPago=$request->get('nombre');
    	$pago->pagado=$request->get('pagado');
    	$pago->verificado=$request->get('verificado');
    	$pago->save();
    	return Redirect::to('admin/pagos');
    }

    public function show($id)
    {
    	return view('admin.pagos.show',["pago"=>Pago::findOrFail($id)]);
    }

    public function edit($id)
    {
        $metodosPago = DB::table('metodos_pago')->where('activo','=',1)->get();
    	return view('admin.pagos.edit',["pago"=>Pago::findOrFail($id),'metodosPago'=>$metodosPago]);
    }

    public function update(PagarFormRequest $request, $id)
    {
    	$pago=Pago::findOrFail($id);
        $pago->formaPago=$request->get('formaPago');
        $pago->numero=$request->get('numero');
        $pago->pagado=$request->get('pagado');
        $pago->verificado=$request->get('verificado');
    	$pago->update();
    	return Redirect::to('admin/pagos');
    }

    public function destroy($id)
    {
		$categoria=Pago::findOrFail($id);
    	$categoria->activo=0;
    	$categoria->update();
    	return Redirect::to('admin/pagos');
    }
}
