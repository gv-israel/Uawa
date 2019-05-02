<?php 
namespace Uawa\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\PayerInfo;
use PayPal\Api\ShippingAddress;
use PayPal\Api\Address;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

use Uawa\Pedido;
use Uawa\PedidoArticulo;
use Uawa\PedidoPago;
use DB;
use Illuminate\Support\Facades\Input; 
class PaypalController extends BaseController
{
	private $_api_context;
	public function __construct()
	{
		// setup PayPal api context
		$paypal_conf = \Config::get('paypal');
		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);

	}
	public function postPayment()
	{
		//OBTIENE DATOS DE ENVIO
		$datosEnvio = DB::table('usuarios_datos')->where('id','=',\Auth::user()->id)->first();

		//DIRECCION DE ENVIO
		$shipping_address = new ShippingAddress();
		$shipping_address->setRecipientName($datosEnvio->nombres.' '.$datosEnvio->apellidos)
		->setLine1($datosEnvio->direccion)
		->setLine2($datosEnvio->direccion2)
		->setCity($datosEnvio->poblacion)
		->setPostalCode($datosEnvio->codigoPostal)
		->setState($datosEnvio->provincia)
		->setCountryCode('EC')
		->setPhone($datosEnvio->celular);

		//DIRECCION FACTURACION
		$billing_address = new Address();
		if($datosEnvio->mismosDatos){
			$billing_address
			->setLine1($datosEnvio->direccion)
			->setLine2($datosEnvio->direccion2)
			->setCity($datosEnvio->poblacion)
			->setPostalCode($datosEnvio->codigoPostal)
			->setState($datosEnvio->provincia)
			->setCountryCode('EC')
			->setPhone($datosEnvio->celular);
		}
		else
		{
			$billing_address
			->setLine1($datosEnvio->facDireccion)
			->setLine2($datosEnvio->facDireccion2)
			->setCity($datosEnvio->facPoblacion)
			->setPostalCode($datosEnvio->facCodigoPostal)
			->setState($datosEnvio->facProvincia)
			->setCountryCode('EC')
			->setPhone($datosEnvio->facCelular);
		}

		

		//METODO DE PAGO
		$payer = new Payer();
		// Valid Values: ["credit_card", "bank", "paypal", "pay_upon_invoice", "carrier"]
		$payer->setPaymentMethod('paypal');


		//INFORMACION DE LA PERSONA QUE PAGA
		$payerInfo = new PayerInfo();
		$payerInfo
		->setFirstName($datosEnvio->nombres)
		->setLastName($datosEnvio->apellidos)
		->setBillingAddress($billing_address)
		->setShippingAddress($shipping_address)

		->setEmail(\Auth::user()->email);



		//ASIGNA INFORMACION DE USUARIO
		$payer->setPayerInfo($payerInfo);

		//OBTENER CARRITO Y MONEDA
		$items = array();
		$subtotal = 0;
		$carrito = \Session::get('carrito');
		$currency = 'USD';

		foreach($carrito as $articulo){
			$item = new Item();
			$item->setName($articulo->nombre)
			->setCurrency($currency)
			->setDescription($articulo->descripcion)
			->setQuantity($articulo->cantidad)
			->setPrice($articulo->pvp)
			->setUrl('http://uawa.ec/ver/'.$articulo->slug);
			$items[] = $item;
			$subtotal += $articulo->cantidad * $articulo->pvp;
		}

		//GUARDAMOS LISTA DE ARTICULOS
		$item_list = new ItemList();
		$item_list->setItems($items);

		//COSTOS DE ENVIO
		$gastosEnvio = 0;
		$details = new Details();
		$details->
		setSubtotal($subtotal)
		->setShipping($gastosEnvio);
		$total = $subtotal + $gastosEnvio;

		$amount = new Amount();
		$amount->setCurrency($currency)
			->setTotal($total)
			->setDetails($details);

		$transaction = new Transaction();
		$transaction->setAmount($amount)
			->setItemList($item_list)
			->setDescription('Pedido online de la tienda UAWA.EC');

		//RUTA DONDE ENVIA AL USUARIO DESPUES DE REALIZAR EL PAGO
		$redirect_urls = new RedirectUrls();
		$redirect_urls->setReturnUrl(\URL::route('pago-paypal-estado'))

		//URL DONDE ENVIA SI CANCELA EL PAGO
		->setCancelUrl(\URL::route('pago-paypal-estado'));

		//SALE = VENTA DIRECTA, REALIZA EL PAGO
		$payment = new Payment();
		$payment->setIntent('Sale')
			->setPayer($payer)
			//->setPayerInfo($payerInfo)
			->setRedirectUrls($redirect_urls)
			->setTransactions(array($transaction));
		try {
			$payment->create($this->_api_context);
		} catch (\PayPal\Exception\PPConnectionException $ex) {
			if (\Config::get('app.debug')) {
				echo "Exception: " . $ex->getMessage() . PHP_EOL;
				$err_data = json_decode($ex->getData(), true);
				exit;
			} else {
				die('Ups! Algo salió mal');
			}
		}
		foreach($payment->getLinks() as $link) {
			if($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
				break;
			}
		}

		// ID DE SEGUIMIENTO DEL PAGO
		\Session::put('paypal_payment_id', $payment->getId());


		if(isset($redirect_url)) {
			// REDIRECCIONA A PAYPAL
			return \Redirect::away($redirect_url);
		}
		return \Redirect::route('carrito')
			->with('error', 'Ups! Error desconocido.');
	}
	public function getPaymentStatus()
	{
		//OBTIENE EL ID DE PAGO DE URL
		$payment_id = \Input::get('paymentId');
 
		//LIMPIA EL ID DE PAGO DE COOKIES
		\Session::forget('paypal_payment_id');

		//OBTIENE TOKEN Y EL ID DE PAGO DE LA URL
		$payerId = \Input::get('PayerID');
		$token = \Input::get('token');
		

		//SI NO RECIBE EL ID DE PAGO O EL TOKEN
		if (empty(\Input::get('PayerID')) || empty(\Input::get('token'))) {
			//REDIRECCIONA AL INICIO CON ERROR
			return \Redirect::route('/')
				->with('error', 'Hubo un problema al intentar pagar con Paypal');
		}

		//TERMINA TRANSACCION
		$payment = Payment::get($payment_id, $this->_api_context);
		// PaymentExecution object includes information necessary 
		// to execute a PayPal account payment. 
		// The payer_id is added to the request query parameters
		// when the user is redirected from paypal back to your site
		$execution = new PaymentExecution();
		$execution->setPayerId(\Input::get('PayerID'));
		//Execute the payment
		$result = $payment->execute($execution, $this->_api_context);
		//echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later
		if ($result->getState() == 'approved') { // payment made
			// Registrar el pedido --- ok


			// Registrar el Detalle del pedido  --- ok
			// Eliminar carrito 
			// Enviar correo a user
			// Enviar correo a admin
			// Redireccionar

			//GUARDA ORDEN
			$this->guardarPedido(\Session::get('carrito'));

			//ELIMINA CARRITO DE COOKIES
			\Session::forget('carrito');


			return \Redirect::route('/')
				->with('mostrarMensaje', 
                [
                   'mensaje' => 'Gracias por su compra. Puede revisar los detallos del pedido en Pedidos.',
                   'tipoMensaje'    => 'alert-success'
                ]);
		}
		return \Redirect::route('carrito')
			->with('mostrarMensaje', 
                [
                   'mensaje' => 'La compra fue cancelada.',
                   'tipoMensaje'    => 'alert-danger'
                ]);
	}	
	private function guardarPedido($carrito)
	{
		$datosEnvio = DB::table('usuarios_datos')->where('id','=',\Auth::user()->id)->first();


	    $subtotal = 0;
	    foreach($carrito as $articulo){
	        $subtotal += $articulo->pvp * $articulo->cantidad;
	    }

		//SI LA CASILLA MISMOS DATOS ESTA MARCADA
		if($datosEnvio->mismosDatos){
			$dats = [
				'facturaCedula' => $datosEnvio->cedula,
		        'facturaNombres' => $datosEnvio->nombres.' '.$datosEnvio->apellidos,
		        'facturaProvincia' => $datosEnvio->provincia,
		        'facturaPoblacion' => $datosEnvio->poblacion,
		        'facturaCodigoPostal' => $datosEnvio->codigoPostal,
		        'facturaDireccion' => $datosEnvio->direccion,
		        'facturaDireccion2' => $datosEnvio->direccion2,
		        'facturaTelefono' => $datosEnvio->telefono,
		        'facturaCelular' => $datosEnvio->celular,
		    	];
		}else{
			$dats = [
				'facturaCedula' => $datosEnvio->facCedula,
		        'facturaNombres' => $datosEnvio->facNombres.' '.$datosEnvio->facApellidos,
		        'facturaProvincia' => $datosEnvio->facProvincia,
		        'facturaPoblacion' => $datosEnvio->facPoblacion,
		        'facturaCodigoPostal' => $datosEnvio->facCodigoPostal,
		        'facturaDireccion' => $datosEnvio->facDireccion,
		        'facturaDireccion2' => $datosEnvio->facDireccion2,
		        'facturaTelefono' => $datosEnvio->facTelefono,
		        'facturaCelular' => $datosEnvio->facCelular,
		    	];
		    }


	    //CREAR ORDEN
	    $pedido = Pedido::create(array_merge([
		   	'deUsuario' => \Auth::user()->id,
		   	'codigoPedido' => generarCodigo(5),
	        'metodoEnvio' => 1,

		    'cedula' => $datosEnvio->cedula,
			'nombres' => $datosEnvio->nombres.' '.$datosEnvio->apellidos,
			'provincia' => $datosEnvio->provincia,
			'poblacion' => $datosEnvio->poblacion,
			'codigoPostal' => $datosEnvio->codigoPostal,
			'direccion' => $datosEnvio->direccion,
			'direccion2' => $datosEnvio->direccion2,
			'observaciones' => 'dejar en puerta de casa',
			'telefono' => $datosEnvio->telefono,
			'celular' => $datosEnvio->celular,

	        'codigoCupon' => 0,
	        'descuento' => 0,
	        'costeEnvio' => 0,
	        'subtotal' => $subtotal,

	        'estado' => 'pendiente_envio',
	        'activo' => 1,
	    ],$dats));

	    //CREAR REGISTRO PAGO
	    $pago = PedidoPago::create([
		   	'dePedido' => $pedido->id,
	        'formaPago' => 'paypal',
	        'numero' => null,
	        'pagado' => 1,
	        'verificado' => null,
	        'activo' => 1,
	    ]);

	    
	    foreach($carrito as $articulo){
	        $this->guardarArticuloOrden($articulo, $pedido->id);
	    }
	}
	private function guardarArticuloOrden($articulo, $idOrden)
	{
		PedidoArticulo::create([
			'dePedido' => $idOrden,
			'articulo' => $articulo->id,
			'cantidad' => $articulo->cantidad,
			'detalles',
        	'pvp' => $articulo->pvp,
		]);
	}	
}