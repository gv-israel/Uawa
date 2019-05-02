<?php

namespace Uawa\Http\Controllers;

use Illuminate\Http\Request;
use Uawa\Articulo;
use Uawa\Transportista;
use Uawa\FormaPago;
use DB;
use Validator;
use \Torann\GeoIP\Facades\GeoIP;

class CarritoController extends Controller
{

	public function __construct()
	{
		if(!\Session::has('carrito')) \Session::put('carrito', array());
	} 

	//VER CARRITO
    public function index(){

    
    	$carrito = \Session::get('carrito');
    	$total = carrito_total();
    	return view('carrito.carrito', compact('carrito','total','metodosEnvio'));
    }

    //AÑADIR ARTICULO
    public function add(Articulo $articulo)
    {
    	$carrito = \Session::get('carrito');
        if(isset($carrito[$articulo->slug])){
            $carrito[$articulo->slug]->cantidad += 1;
        }
        else{
            $articulo->cantidad = 1;
            $carrito[$articulo->slug] = $articulo;
        }

    	\Session::put('carrito', $carrito);
    	return redirect()->back()
                ->with('mostrarMensaje', 
                [
                   'mensaje' => 'Articulo añadido correctamente al carrito.',
                   'tipoMensaje'    => 'alert-success'
                ]);
    }

    //ELIMINAR ARTICULO
    public function delete(Articulo $articulo)
    {
    	$carrito = \Session::get('carrito');
		unset($carrito[$articulo->slug]);
		\Session::put('carrito', $carrito);
    	return redirect()->back()
                ->with('mostrarMensaje', 
                [
                   'mensaje' => 'El articulo se ha eliminado correctamente del carrito.',
                   'tipoMensaje'    => 'alert-success'
                ]);
    }

    //VACIA CARRITO
    public function trash()
    {
    	\Session::forget('carrito');
        \Session::forget('carrito-envio');
        \Session::forget('carrito-descuento');
    	return redirect()->route('carrito-ver');
    }

    //ACTUALIZAR ITEM
    public function update(Articulo $articulo, $cantidad)
    {
    	$carrito = \Session::get('carrito');
    	$carrito[$articulo->slug]->cantidad = $cantidad;
    	\Session::put('carrito', $carrito);
    	return redirect()->route('carrito-ver');
    }




    //DETALLE PEDIDO
    public function detallePedido()
    {
        //SI NO EXISTE CARRITO
        if(count(\Session::get('carrito')) <= 0){ return redirect()->route('/'); }

        $carrito = \Session::get('carrito');
        $total = carrito_total();
        $metodosEnvio = DB::table('metodos_envio')->where('activo','=',1)->get();
        return view('carrito.detalle-pedido', compact('carrito','total'))->with('metodosEnvio', $metodosEnvio);

    }

    //REVISA SI EL METODO DE PAGO ESTA SELECCIONADO Y 
    public function pagar(Request $request){
        //VALIDAR FORMA DE PAGO
        $validarDatos = Validator::make($request->all(), [
            'metodoPago' => 'required|string|exists:metodos_pago,slug',
            'metodoEnvio' => 'required|string|exists:metodos_envio,slug',
        ]);

        //SI LA VALIDACION FALLA
        if($validarDatos->fails()) {
            //HACE ESTO
            return\Redirect::back()->withErrors($validarDatos);
        }
        else
        {
            //SI ES CORRECTA VALIDA
            //VALIDA SI FALTAN DATOS
            if(verificarDatos()){ return verificarDatos();}

            //SI NO EXISTE CARRITO
            if(count(\Session::get('carrito')) <= 0){ return redirect()->route('/'); }
            //SI NO HAY METODO DE ENVIO
            if(\Session::get('carrito-envio') == null)
            {
                return redirect()->route('carrito-ver')->with('mostrarMensaje', 
                    [
                       'mensaje' => 'Debe de seleccionar un metodo de envio.',
                       'tipoMensaje'    => 'alert-danger'
                    ]);
            }
            
        }



        switch ($request->get('metodoPago')) {
            case 'paypal':
                return redirect()->route('pago-paypal');
                break;
            case 'tarjeta':
                return redirect()->route('pago-tarjeta');
                break;
            case 'pichincha':
                return redirect()->route('pago/deposito')->with('pichincha');
                break;
            case 'pacifico':
                return redirect()->route('pago/deposito')->with('pacifico');
                break;
            case 'internacional':
                return redirect()->route('pago/deposito')->with('internacional');
                break;

            
            default:
                return 'default';
                break;
        }

    }

    //ACTUALIZAR METODO ENVIO
    public function actualizarEnvio($metodo)
    {
        //SI NO EXISTE COOKIE CREA
        if(!\Session::has('carrito-envio')) \Session::put('carrito-envio', array());

        $met=Transportista::where('slug','=', $metodo)->first();
        //SI NO EXISTE METODO
        if(!$met) {
            return redirect()->back()->with('mostrarMensaje', 
                    [
                       'mensaje' => 'Seleccione un metodo de envio valido.',
                       'tipoMensaje'    => 'alert-danger'
                    ]);
        }

        $carritoE = \Session::get('carrito-envio');
        //SI EL METODO DE PAGO ES EFECTIVO
        $carritoP = \Session::get('carrito-pago');
        if($carritoP == 'efectivo'){
            \Session::put('carrito-envio', 'recogida');
        }

        else{
            \Session::put('carrito-envio', $met->slug);
        }
        return redirect()->back();
    }

    //ACTUALIZAR METODO DE PAGO
    public function actualizarPago($metodo)
    {
        //SI NO EXISTE COOKIE CREA
        if(!\Session::has('carrito-pago')) \Session::put('carrito-pago', array());

        $met=FormaPago::where('slug','=', $metodo)->first();
        //SI NO EXISTE METODO
        if(!$met) {
            return redirect()->back()->with('mostrarMensaje', 
                    [
                       'mensaje' => 'Seleccione un metodo de pago valido.',
                       'tipoMensaje'    => 'alert-danger'
                    ]);
        }

        //SI EL METODO ES EN EFECTIVO CAMBIA EL ENVIO A RECOGIDA
        if($metodo == 'efectivo'){
            $carritoE = \Session::get('carrito-envio');
            $carritoE = 'recogida';
            \Session::put('carrito-envio', $carritoE);
        }
        

        $carritoE = \Session::get('carrito-pago');
        $carritoE = $met->slug;
        \Session::put('carrito-pago', $carritoE);
        return redirect()->back();
    }

    //APLICAR CUPON
    public function aplicarCupon($cupon)
    {
        //SI NO EXISTE COOKIE CREA
        if(!\Session::has('carrito-descuento')) \Session::put('carrito-descuento', array());

        $met=Transportista::where('slug','=', $metodo)->first();
        //SI NO EXISTE METODO
        if(!$met) {
            return 'fallo';
        }
        

        $carritoE = \Session::get('carrito-envio');
        $carritoE['transportista'] = $met->slug;
        $carritoE['envio'] = $met->coste;
        \Session::put('carrito-envio', $carritoE);
        return redirect()->route('carrito-ver');
        
    }
}
