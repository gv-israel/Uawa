<?php
use Illuminate\Support\Str;

//GENERAR CODIGO DE PEDIDO 8 DIGITOS
function generarCodigo($chars){
    return strtoupper(Str::random($chars));
}

//DEVUELVE ARRAY ITEMS MENU
function menu($tipo){
    $invitado = [
    "Inicio" => url('/'),
    "Tienda" => url('tienda'),
    "Descargar" => url('descargar'),
    "Uawa" => [
            "¿Quienes somos?" => url('quienes-somos'),
            "Realidad aumentada" => url('realidad-aumentada'),
            "Preguntas frecuentes" => url('preguntas-frecuentes'),
            "Contáctenos" => url('contacto'),
            ],  
    ];
    $admin = [
    "Administracion" => [
            "PDV" => url('admin/pdv'),
            "Categorias" => url('admin/categorias'),
            "Articulos" => url('admin/articulos'),
            "Usuarios" => url('admin/usuarios'),
            "Preguntas y Respuestas" => url('admin/preguntas'),

            "Pedidos" => url('admin/pedidos'),
            "Quejas/Reclamos" => url('admin/reclamos'),
            "Pagos" => url('admin/pagos'),
            "Transportistasdd" => url('admin/transportistas'),


            ],  
    ];
    $usuario = [
    nombreApellido() => [
            "Modificar cuenta" => url('usuario/modificar-cuenta'),
            "Pedidos" => url('usuario/pedidos'),
            "Cerrar sesión" => url('cerrar-sesion'),
            ],  
    ];
    switch ($tipo) {
        case 'invitado':
            return $invitado;
        break;
        case 'admin':
            return $admin;
        break;
        case 'usuario':
            return $usuario;
        break;
        
        default:
            return null;
        break;
    }
}

//DEVUELVE UN NOMBRE Y UN APELLIDO
function nombreApellido()
{
    if(!Auth::user()) {return null;}
    $nombreCompleto = Auth::user()->nombres." ";
    $primerNombre = explode(" ", $nombreCompleto);

    $apellidosCompletos = Auth::user()->apellidos." ";
    $primerApellido = explode(" ", $apellidosCompletos);
    return $primerNombre[0]." ".$primerApellido[0];
}

function provincias(){

    $p = [
        'Azuay'=>'azuay',
        'Bolívar'=>'bolivar',
        'Cañar'=>'canar',
        'Carchi'=>'carchi',
        'Chimborazo'=>'chimborazo',
        'Cotopaxi'=>'cotopaxi',
        'El Oro'=>'el_oro',
        'Esmeraldas'=>'esmeraldas',
        'Galápagos'=>'galapagos',
        'Guayas'=>'guayas',
        'Imbabura'=>'imbabura',
        'Loja'=>'loja',
        'Los Ríos'=>'los_rios',
        'Manabí'=>'manabi',
        'Morona Santiago'=>'morona_santiago',
        'Napo'=>'napo',
        'Orellana'=>'orellana',
        'Pastaza'=>'pastaza',
        'Pichincha'=>'pichincha',
        'Santa Elena'=>'santa-elena',
        'Santo Domingo de los Tsáchilas'=>'santo_domingo',
        'Sucumbíos'=>'sucumbios',
        'Tungurahua'=>'tungurahua',
        'Zamora Chinchipe'=>'zamora_chinchipe'
        ];
    return $p;
}



function getIp(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
                }
            }
        }
    }
}