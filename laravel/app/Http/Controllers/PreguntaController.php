<?php

namespace Uawa\Http\Controllers;

use Illuminate\Http\Request;
use Uawa\Http\Requests;
use Uawa\Pregunta;
use Illuminate\Support\Facades\Redirect;
use Uawa\Http\Requests\PreguntaFormRequest;
use DB;
class PreguntaController extends Controller
{
    
    public function index(Request $request)
    {
    	if($request)
    	{
            $consulta=trim($request->get('buscar'));
    		$categorias = DB::table('preguntas_respuestas')
            ->select('categoria','pregunta')
            ->where('categoria','LIKE','%'.$consulta.'%')
            ->groupBy('categoria')
            ->paginate(10);
    		return view('admin.preguntas.index', ["categorias"=>$categorias,"textoBusqueda"=>$consulta]);
    	}
    	
    }
    public function create()
    {
    	return view('admin.preguntas.create');
    }
    public function store(PreguntaFormRequest $request)
    {
    	$pregunta=new Pregunta;
    	$pregunta->pregunta=$request->get('pregunta');
    	$pregunta->respuesta=$request->get('respuesta');
        $pregunta->categoria=$request->get('categoria');
    	$pregunta->save();
    	return Redirect::to('admin/preguntas');
    }

    public function show($id)
    {
    	return view('admin.preguntas.show',["pregunta"=>Pregunta::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view('admin.preguntas.edit',["pregunta"=>Pregunta::findOrFail($id)]);
    }

    public function update(PreguntaFormRequest $request, $id)
    {
    	$pregunta=Pregunta::findOrFail($id);
    	$pregunta->pregunta=$request->get('pregunta');
    	$pregunta->respuesta=$request->get('respuesta');
        $pregunta->categoria=$request->get('categoria');
    	$pregunta->update();
    	return Redirect::to('admin/preguntas');
    }

    public function destroy($id)
    {
		$pregunta=Pregunta::findOrFail($id);
    	$pregunta->delete();
    	return Redirect::to('admin/preguntas');
    }
}
