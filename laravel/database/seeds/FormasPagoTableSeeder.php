<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uawa\FormaPago;

class FormasPagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = array(
            [
                'slug' => 'efectivo',
                'entidad'=>'Efectivo',
                'descripcion' => 'Pagar en efectivo en oficinas.',
                'imagen' => 'efectivo.png',
                'beneficiario'=>null,
                'numeroCuenta'=>null,
                'tipo'=>null,
                'otrosDatos' => null,
                'instrucciones' => null,
                'activo' => 1,
            ],
            [
                'slug' => 'tarjeta',
                'entidad'=>'Tarjeta de Credito/Debito',
                'descripcion' => 'Pagar facilmente con tarjeta de credito o debito.',
                'imagen' => 'tarjeta.png',
                'beneficiario'=>null,
                'numeroCuenta'=>null,
                'tipo'=>null,
                'otrosDatos' => null,
                'instrucciones' => null,
                'activo' => 1,
            ],
            [
                'slug' => 'paypal',
                'entidad'=>'PayPal',
                'descripcion' => 'Pagar de forma segura a traves de PayPal.',
                'imagen' => 'paypal.png',
                'beneficiario'=>null,
                'numeroCuenta'=>null,
                'tipo'=>null,
                'otrosDatos' => null,
                'instrucciones' => null,
                'activo' => 1,
            ],
            [
                'slug' => 'pichincha',
                'entidad'=>'Banco Pichincha - Transferencia/Deposito',
                'descripcion' => 'Pagar a traves de deposito o transferencia bancaria.',
                'imagen' => 'pichincha.png',
                'beneficiario'=>'Laura Fernanda Padilla',
                'numeroCuenta'=>'2100141422',
                'tipo'=>'corriente',
                'otrosDatos' => null,
                'instrucciones' => 'Puede realizar el deposito en cualquier sucursal "Pichincha - Mi vecino" mas cercana o realizar la transferencia a traves de internet.',
                'activo' => 1,
            ],
            [
                'slug' => 'pacifico',
                'entidad'=>'Banco del Pacifico - Transferencia/Deposito',
                'descripcion' => 'Pagar a traves de deposito o transferencia bancaria.',
                'imagen' => 'pacifico.png',
                'beneficiario'=>'Uawatex S.A.',
                'numeroCuenta'=>'135345334',
                'tipo'=>'ahorros',
                'otrosDatos' => null,
                'instrucciones' => null,
                'activo' => 1,
            ],
            [
                'slug' => 'internacional',
                'entidad'=>'Banco del Internacional - Transferencia/Deposito',
                'descripcion' => 'Pagar a traves de deposito o transferencia bancaria.',
                'imagen' => 'pacifico.png',
                'beneficiario'=>'Uawatex S.A.',
                'numeroCuenta'=>'135345334',
                'tipo'=>'ahorros',
                'otrosDatos' => null,
                'instrucciones' => null,
                'activo' => 1,
            ],
            [
                'slug' => 'produbanco',
                'entidad'=>'Produbanco - Transferencia/Deposito',
                'descripcion' => 'Pagar a traves de deposito o transferencia bancaria.',
                'imagen' => 'produbanco.png',
                'beneficiario'=>'Uawatex S.A.',
                'numeroCuenta'=>'112312304',
                'tipo'=>'corriente',
                'otrosDatos' => null,
                'instrucciones' => null,
                'activo' => 0,
            ],


        );

        FormaPago::insert($data);
    }
}