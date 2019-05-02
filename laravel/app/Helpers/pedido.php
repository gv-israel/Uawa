<?php
function array_metodosEnvio(){
	$array = DB::table('metodos_envio')->where('activo','=',1)->get();
	return $array;
}

//OBTIENE USUARIO
function ob_usuario($id){
	return DB::table('users')
    ->select('usuario')
    ->where('id', '=', $id)
    ->pluck('usuario')
    ->first();
}

//OBTIENE TRANSPORTISTA
function ob_transportista($id){
	return DB::table('metodos_envio')
        ->select('transportista')
        ->where('id', '=', $id)
        ->pluck('transportista')
		->first();
}

