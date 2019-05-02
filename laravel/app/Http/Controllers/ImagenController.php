<?php

namespace Uawa\Http\Controllers;

use Illuminate\Http\Request;
use Uawa\ArticuloImagen;
use Illuminate\Support\Facades\Redirect;
use Uawa\Http\Requests;

class ImagenController extends Controller
{

    public function destroy($id)
    {
    	$imagen=ArticuloImagen::findOrFail($id)->delete();
    	return back();
    }

    public function destacarImagen(Request $request)
    {

    	///QUIUITAR DESTACADO A TODOS
		ArticuloImagen::where('destacado', '=', 1)
		->update(['destacado' => 0]);

    	$imagen=ArticuloImagen::findOrFail($request->id);
    	$imagen->destacado=1;
    	$imagen->update();




    	return response()->json(['success'=>'Imagen destacada correctamente.']);
    }
}
