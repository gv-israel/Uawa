<?php
use Uawa\Transportista;
use Uawa\Provincia;
use Uawa\UsuarioDatos;

//OBTENER VALOR ENVIO PASANDO SLUG COMO VAR
function carrito_valorEnvio()
{
    global $carritoEnvio;
    $carritoEnvio = \Session::get('carrito-envio'); //slug
    $total = 0;

    //COMPRUEBA SI INICIO SESION O NO
    if(!\Auth::check()){
        $max=Provincia::where('deTransportista','=', $carritoEnvio)->first();
    }

    

    $total = include_calcularEnvio($total);


    //CALCULAR DESCUENTO
    $total = include_calcularDescuento($total);


    //si existe variable de funcion en carrito
    //SI INICIO SESION
    if(\Auth::check()){
        //VERIFICA SI HA CARRITO
        if($carritoEnvio){
            $prov=UsuarioDatos::where('deUsuario','=', \Auth::user()->id)
            ->pluck('provincia')
            ->first();
            $met=Provincia::where('deTransportista','=', $carritoEnvio)->first();
            return $met->$prov;      
        }
        else{
            $met=Provincia::where('deTransportista','=', 'servientrega')->first();

            //AQUI DEBE OBTENER PROVINCIA EN BASE A IP
            return $met->pichincha;  
        }

    }
    //SI NO INICIO SESION
    else
    {
        //VERIFICA SI HA CARRITO
        if($carritoEnvio){
            $met=Provincia::where('deTransportista','=', $carritoEnvio)->first();
            return $met->pichincha;      
        }
        else{
            
            return 0;  
        }
    }
    
    
}

//CALCULA DESCUENTO PASANDO TOTAL
function include_calcularEnvio($total){
    global $carritoEnvio;
    //SI EL USUARIO INICIO SESION
    if(\Auth::check()){
        //CONSULTAR DATOS
        $prov=UsuarioDatos::where('deUsuario','=', \Auth::user()->id)
        ->pluck('provincia')
        ->first();
            //SI EXISTE COOKIE CARRITO-ENVIO
            if($carritoEnvio){
                //CONSULTAR COSTE EN PROVINCIA
                $met=Provincia::where('deTransportista','=', $carritoEnvio)->first();
                $total = intval($met->$prov);
                return $total;
            }
            //SI NO EXISTE COOKIE CARRITO-ENVIO
            else{
                $total = intval(0);
                return $total;
            }
    }
    //SI NO INICIO SESION
    else{
            //SI EXISTE COOKIE CARRITO-ENVIO
            if($carritoEnvio){
                //CONSULTAR COSTE EN PROVINCIA
                $met=Provincia::where('deTransportista','=', $carritoEnvio)->first();
                $total += intval($met->$carritoEnvio);
                return $total;
            }
            //SI NO EXISTE COOKIE CARRITO-ENVIO
            else{
                $total += intval(0);
                return $total;
            }
    }
}

function include_calcularDescuento($total){
    global $carritoEnvio;
    //POR COMPRAS SUPERIORES A 20 DOLARES ENVIO GRATIS
    if(carrito_subtotal() >= 20 && $carritoEnvio){
        $met=Provincia::where('deTransportista','=', $carritoEnvio)->first();
        $total -= $total - intval($met->$carritoEnvio);
        return $total;
    }
    else
    {
        return $total;
    }
}


//OBTENER SUBTOTAL
function carrito_subtotal()
{
    $carrito = \Session::get('carrito');

    $subtotal = 0;
    foreach($carrito as $articulo)
    {
        $subtotal += $articulo->pvp*$articulo->cantidad;        
    }
    return $subtotal;
}

//OBTENER TOTAL
function carrito_total()
{
    $total = carrito_subtotal();

    //OBTENER VALOR ENVIO ENVIO
    if(carrito_valorEnvio()){
        $total += intval(carrito_valorEnvio());
    }

    return $total;
}

//DEVUELVE NUMERO DE ARTICULOS DEL CARRITO
function carrito_numArticulos(){
    //OBTENER TOTAL ARTICULOS DE CARRITO
    $carrito = \Session::get('carrito');
                                               if($carrito){
                                                    $total = 0;
                                                    foreach($carrito as $articulo)
                                                    {
                                                        $total += $articulo->cantidad;
                                                    }
                                                }
                                                else{
                                                    $total = 0;
                                                }


                                                return $total;
}

//DEVUELVE ARRAY CARRITO
function carrito_array(){
    $carrito = \Session::get('carrito');
    if($carrito){
        return $carrito;
    }
    else
    {
        return 0;
    }
    
}

//DEVUELVE HTML IMAGEN DE ARTICULO
function imagenArticulo($idArticulo,$ancho,$largo)
{
    $img = DB::table('articulos_imagenes')
    ->select(DB::raw('MAX(destacado) as destacado'))
    ->select('imagen')
    ->where('deArticulo','=',$idArticulo)
    ->where('destacado','=',1)
    ->pluck('imagen')
    ->first();
    if($img)
    {
    return '<img src="http://uawa/storage/articulo_miniatura/'.$img.'" width="'.$ancho.'" height="'.$largo.'">';
    }
    else
    {
    return '<img src="http://uawa/imagenes/default.png" width="'.$ancho.'" height="'.$largo.'">';
    }
    
}


//VERIFICA SI FALTAN DATOS DE ENVIO Y FACTURACION Y REDIRIGE
function verificarDatos()
{

            $datosPedido = DB::table('usuarios_datos')->where('deUsuario', '=', \Auth::user()->id)->first();

            if(
                empty(isset($datosPedido->cedula))
                && empty(isset($datosPedido->nombres))
                && empty(isset($datosPedido->apellidos))
                && empty(isset($datosPedido->provincia))
                && empty(isset($datosPedido->poblacion))
                && empty(isset($datosPedido->codigoPostal))
                && empty(isset($datosPedido->direccion))
                && empty(isset($datosPedido->celular))
            ){
                //SI FALTA ALGUN CAMPO DEVUELVE ERROR
                return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error_input'=> 'Los datos de envio estan incompletos.']);
            }
            /*
            if(
                !$datosPedido->mismosDatos
                && !$datosPedido->facCedula
                && !$datosPedido->facNombres
                && !$datosPedido->facApellidos
                && !$datosPedido->facProvincia
                && !$datosPedido->facPoblacion
                && !$datosPedido->facCodigoPostal
                && !$datosPedido->facDireccion
                && !$datosPedido->facCelular
            )
            {
                //SI NO SON LOS MISMOS DATOS Y FALTA ALGUN CAMPO
                return redirect()->back()->withInput()->withErrors(['error_input'=> 'Los datos de facturación estan incompletos.']);
            }

            */
}