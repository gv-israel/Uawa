@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Listado de Pagos')
@section('contenido')
<div class="content-container">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                @include('admin.pagos.busqueda')
                                <!--<a href="/admin/pagos/create" class="pull-right text-uppercase"><button class="btn btn-primary">Nuevo Pago</button></a>-->
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-condensed table hover">
                                    <thead>
                                        <th>ID</th>
                                        <th>Pedido</th>
                                        <th>Forma de Pago</th>
                                        <th>Numero</th>

                                        
                                        <th>Fecha de Pago</th>
                                        
                                        <th>Pagado</th>
                                        <th>Verificado</th>
                                        <th>Fecha</th>
                                        <th>Opciones</th>
                                    </thead>
                                    @foreach ($pagos as $pago)
                                    <tr class="text-center @if(!$pago->activo) disabled @endif">
                                        <td>{{$pago->id}}</td>
                                        <td>@php
                                                $ped = DB::table('pedidos')
                                                ->select('codigoPedido','id')
                                                ->where('id', '=', $pago->dePedido)
                                                ->first();
                                                @endphp
                                                <a href="{{url('/admin/pedidos/'.$ped->id)}}">#{{$ped->codigoPedido}}</a>
                                        </td>
                                        <td>@php
                                                $ped = DB::table('metodos_pago')
                                                ->select('entidad','imagen')
                                                ->where('slug', '=', $pago->formaPago)
                                                ->first();
                                                @endphp
                                                <img src="{{asset('imagenes/metodos-pago/'.$ped->imagen)}}" width="40%">
                                        </td>
                                        
                                        <td>{{$pago->numero}}</td>
                                        <td>{{$pago->fecha_pago}}</td>
                                        <td>
                                        	@if($pago->pagado)
												<i class="fa fa-check fa-2x" style="color: limegreen;"></i>
                                            @else
                                                <i class="fa fa-clock-o text-primary fa-2x"></i>
                                            @endif
                                        </td>
                                        <td>
                                        	@if($pago->verificado)
												<i class="fa fa-check fa-2x" style="color: limegreen;"></i>
                                            @else
                                                <i class="fa fa-clock-o text-primary fa-2x"></i>
                                            @endif                                        	
                                        </td>
                                        <td>{{$pago->fecha_creacion}}</td>
                                        <td>
                                            
                                            <a href="" data-target="#modal-eliminar-{{$pago->id}}" data-toggle="modal" class="pull-right text-uppercase"><button class="btn btn-danger">Eliminar</button></a>
                                            <a href="{{URL::action('PagoController@edit', $pago->id)}}" class="pull-right text-uppercase"><button class="btn btn-info">Editar</button></a>
                                            <a href="{{URL::action('PagoController@edit', $pago->id)}}" class="pull-right text-uppercase"><button class="btn btn-info">Visualizar</button></a>
                                        </td>
                                    </tr>
                                    @include('admin.pagos.modal-eliminar')
                                    @endforeach
                                </table>
                                </div>
                                {{$pagos->render()}}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')
<style type="text/css">
    
    .disabled{
        filter: grayscale(100%) !important;
        -webkit-filter: grayscale(100%) !important;
        transition: filter 0.4s !important;
        -webkit-transition: -webkit-filter 1s !important;
        pointer-events:none;
    }
</style>

@endsection