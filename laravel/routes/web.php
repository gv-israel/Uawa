<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::bind('arti', function($slug){
	return Uawa\Articulo::where('slug', $slug)->first() ?? abort(404);
});


Route::get('/', function () {
    return view('index');
})->name('/');;
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});
Route::get('/preguntas-frecuentes', function () {
    return view('preguntas-frecuentes');
});
Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/camisetas-realidad-aumentada', function () {
    return view('realidad-aumentada');
});

Route::get('/descargar', function () {
    return view('descargar');
});

Route::get('/seguimiento-envio', function () {
    return view('seguimiento-envio.seguimiento-envio');
});
//#################################
//	POLITICAS
//#################################
Route::get('/politica-privacidad', function () {
    return view('politicas.politica-privacidad');
});
Route::get('/politica-cookies', function () {
    return view('politicas.politica-cookies');
});
Route::get('/terminos-condiciones', function () {
    return view('politicas.terminos-condiciones');
});


//#################################
//	TIENDA
//#################################
Route::resource('/tienda','TiendaController');

Route::get('/ver/{slug}', [
	'as' => 'ver-articulo',
	'uses' => 'TiendaController@show'
]);

//#################################
//	CARRITO
//#################################

//Route::resource('/carrito','CarritoController');

Route::get('/carrito',[
	'as' => 'carrito-ver',
	'uses' => 'CarritoController@index'
]);

Route::get('/carrito/agregar/{arti}',[
	'as' => 'carrito-agregar',
	'uses' => 'CarritoController@add'
]);

Route::get('/carrito/eliminar/{arti}',[
	'as' => 'carrito-eliminar',
	'uses' => 'CarritoController@delete'
]);

Route::get('/carrito/actualizar/{arti}/{cantidad}',[
	'as' => 'carrito-actualizar',
	'uses' => 'CarritoController@update'
]);

Route::get('/carrito/vaciar',[
	'as' => 'carrito-vaciar',
	'uses' => 'CarritoController@trash'
]);

Route::get('detalle-pedido', [
	'middleware' => 'auth',
	'as' => 'detalle-pedido',
	'uses' => 'CarritoController@detallePedido'
]);

Route::get('/carrito/envio/{metodo}',[
	'as' => 'carrito-actualizar-envio',
	'uses' => 'CarritoController@actualizarEnvio'
]);

Route::get('/carrito/pago/{metodo}',[
	'as' => 'carrito-actualizar-pago',
	'uses' => 'CarritoController@actualizarPago'
]);


//#################################
//	AUTENTICACION
//#################################
Route::get('/iniciar-sesion', function () {
    return view('iniciar-sesion');
})->name('iniciar-sesion');;

Route::get('/cerrar-sesion', 'Auth\LoginController@logout');
Auth::routes();

//FACEBOOK LOGIN
Route::get('auth/{provider}', 'Auth\FacebookLoginController@redirectToProvider')->name('social-login');
Route::get('auth/{provider}/callback', 'Auth\FacebookLoginController@handleProviderCallback');


//#################################
//	PAGOS
//#################################

// Enviamos nuestro pedido a PayPal
Route::post('pagar', array(
	'as' => 'pagar',
	'uses' => 'CarritoController@pagar',
));


// Enviamos nuestro pedido a PayPal
Route::get('pago/paypal/', array(
	'as' => 'pago-paypal',
	'uses' => 'PaypalController@postPayment',
));

// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('pago/paypal/estado', array(
	'as' => 'pago-paypal-estado',
	'uses' => 'PaypalController@getPaymentStatus',
));



//#################################
//	ADMIN
//#################################

Route::resource('admin/categorias','CategoriaController');
Route::resource('admin/articulos','ArticuloController');
Route::resource('admin/usuarios','UsuarioController');
Route::resource('admin/pedidos','PedidoController');
Route::resource('admin/preguntas','PreguntaController');
Route::resource('admin/pagos','PagoController');

//#################################
//	CONTROLADOR IMAGENES
//#################################
Route::resource('admin/imagenes','ImagenController');
Route::post('/admin/imagenes/destacar', 'ImagenController@destacarImagen');



Route::get('/home', 'HomeController@index')->name('home');



//#################################
//	HACER MIGRACION EN HOSTING
//#################################
Route::get('install', function() {
	//Artisan::call('migrate:rollback');
    Artisan::call('migrate');
    Artisan::call('db:seed');
});

