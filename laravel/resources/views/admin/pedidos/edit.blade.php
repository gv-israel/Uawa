@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Editar Pedido')
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

                                        {!!Form::model($pedido,['method'=>'PATCH','action'=>['PedidoController@update',$pedido->id],'files'=>'true'])!!}
                                        {{Form::token()}}
                                        <div class="row">
                                                                              
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="codigoPedido">Codigo:</label> {{$pedido->codigoPedido}}
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="deUsuario">Usuario:</label> {{ob_usuario($pedido->deUsuario)}}
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Metodo de Envio</label>
                                                    <select name="metodoEnvio" class="form-control">
                                                        @foreach(array_metodosEnvio() as $metodo)
                                                            @if($pedido->metodoEnvio == $metodo->transportista)
                                                                <option value="{{$metodo->id}}" selected>Actual: {{$metodo->transportista}}</option>
                                                            @else
                                                                <option value="{{$metodo->id}}">{{$metodo->transportista}}</option>
                                                            @endif
                                                        @endforeach
                                                        
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Observaciones</label>
                                                    <input type="text" name="pvp" class="form-control" required value="{{$pedido->observaciones}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <button class="btn btn-primary" type="submit">Crear</button>

                                            </div>

                                        </div>


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