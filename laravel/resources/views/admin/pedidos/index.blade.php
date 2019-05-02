@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Listado de Pedidos')
@section('contenido')
<div class="content-container">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                @include('admin.pedidos.busqueda')
                                <a href="/admin/pedidos/create" class="pull-right text-uppercase"><button class="btn btn-primary">Nuevo Pedido</button></a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table hover">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Usuario</th>
                                            <th>Localizacion</th>
                                            <th>Transportista</th>
                                            <th>Subtotal</th>
                                            <th>Estado</th>
                                            <th>Pagado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach ($pedidos as $pedido)
                                        <tr class="text-center">
                                            
                                            <td><strong>{{$pedido->codigoPedido}}</strong></td>
                                            <td>
                                                {{ob_usuario($pedido->deUsuario)}}
                                            </td>
                                            <td>{{$pedido->poblacion.'/'.$pedido->provincia}}</td>
                                            <td>
                                                {{ob_transportista($pedido->deUsuario)}}
                                            </td>
                                            <td>{{$pedido->subtotal}}</td>
                                            <td>{{$pedido->estado}}</td>
                                            <td >@php
                                                $trans = DB::table('pedidos_pagos')
                                                ->select('pagado','verificado')
                                                ->where('dePedido', '=', $pedido->id)
                                                ->first();
                                                @endphp
                                                @if($trans->pagado)
                                                    @if($trans->verificado)
                                                        <i class="fa fa-flag-checkered" style="color: limegreen;"></i>
                                                     @else
                                                        <i class="fa fa-check-square-o text-primary"></i>
                                                     @endif
                                                
                                                @else
                                                <i class="fa fa-clock-o fa-2x"></i>
                                                @endif
                                                

                                                
                                            </td>
                                            <td class=" text-uppercase">

                                                <a href="" data-target="#modal-eliminar-{{$pedido->id}}" data-toggle="modal" class="pull-right">
                                                    <button class="btn btn-danger"><i class="fa fa-close"></i> <span>Cancelar</span></button>
                                                </a>
                                                <a href="http://uawa/admin/pedidos/{{$pedido->id}}/edit" class="pull-right">
                                                    <button class="btn btn-info"><i class="fa fa-edit"></i> <span>Editar</span></button>
                                                </a>
                                                



                                                @php
                                                $pag = DB::table('pedidos_pagos')
                                                ->select('dePedido','id')
                                                ->where('dePedido', '=', $pedido->id)
                                                ->pluck('id')
                                                ->first();
                                                @endphp
                                                <a href="http://uawa/admin/pagos/{{$pag}}/edit" class="pull-right">
                                                    <button class="btn btn-info"><i class="fa fa-usd"></i> <span>Gestionar Pago</span></button>
                                                </a>
                                                <a href="" class="pull-right">
                                                    <button class="btn btn-info"><i class="fa fa-paperclip"></i> <span>Imprimir factura</span></button>
                                                </a>
                                                
                                                <a href="#" data-id="{{$pedido->id}}" class="btnImprimir pull-right">
                                                    <button class="btn btn-info"><i class="fa fa-cube"></i> <span>Imprimir packing</span></button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                    @include('admin.pedidos.modal-eliminar')
                                    @endforeach
                                    </table>
                            
                                </div>
                                {{$pedidos->render()}}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    button span{
        display:none;
    }
    button:hover span{
        display:inline-block !important;
    }
</style>
@endsection



@section('jquery')

<script type="text/javascript">
    
$(".btnImprimir").click(function() {
            var idrow = $(this).attr('data-id');
            if (idrow !== "" && typeof idrow !== 'undefined') {
                $("#imprimir").remove(); //LIMPIA IFRAME SI YA SE PULSO BOTON
                $("body").append('<iframe id="imprimir" src=/admin/pedidos/' + idrow + ' style="position:absolute;top:0px; left:0px;width:0px; height:0px;border:0px;overfow:none; z-index:-1"></iframe>');
                $("#imprimir").get(0).contentWindow.print();
            }
        });

</script>

@endsection