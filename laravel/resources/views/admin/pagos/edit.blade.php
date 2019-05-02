@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Editar Registro de Pago')
@section('contenido')
<div class="content-container">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row contact-form-wrapper">
                                    <div class="col-sm-12">
                                        @include('layout.errores')

                                        {!!Form::model($pago,['method'=>'PATCH','action'=>['PagoController@update',$pago->id]])!!}
                                        {{Form::token()}}
                                        <div class="form-group">
                                            <label for="dePedido">Pedido</label>
                                            {{$pago->dePedido}}
                                        </div>
                                        <div class="form-group">
                                            <label for="verificado">Fecha de Creación</label>
                                            {{$pago->fecha_creacion}}
                                        </div>
                                        <div class="form-group">
                                            <label for="formaPago">Forma de Pago</label>
                                          

                                            <select class="form-control" name="formaPago">
                                                
                                                @foreach($metodosPago as $metodo)
                                                    @if($metodo->slug == $pago->formaPago)
                                                        <option value="{{$metodo->slug}}" selected="">Actual: {{$metodo->entidad}}</option>
                                                    @else
                                                        <option value="{{$metodo->slug}}">{{$metodo->entidad}}</option>
                                                    @endif
                                                
                                                    
                                                @endforeach
                                                
                                                
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="numero">Numero</label>
                                            <input type="text" name="numero" class="form-control" value="{{$pago->numero}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="pagado">Pagado</label>
                                            <select class="form-control" name="pagado">
                                                <option value="{{$pago->pagado}}">Actual: @if($pago->pagado) Si @else No @endif</option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="verificado">Verificado</label>
                                            <select class="form-control" name="verificado">
                                                <option value="{{$pago->verificado}}">Actual: @if($pago->verificado) Si @else No @endif</option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>


                                        <button class="btn btn-primary" type="submit">Editar</button>
                                        {!!Form::close()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                @include('admin.bloque-menu')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection