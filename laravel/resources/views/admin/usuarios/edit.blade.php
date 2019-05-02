@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Editar Usuario')
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

                                        {!!Form::model($usuario,['method'=>'PATCH','action'=>['UsuarioController@update',$usuario->id]])!!}
                                        {{Form::token()}}
                                        <div class="form-group">
                                            <label for="nombre">Nombres</label>
                                            <input type="text" name="nombres" class="form-control" value="{{$usuario->nombres}}">
                                        </div>
                                        <div class="form-group">
                                           <label for="descripcion">Apellidos</label>
                                            <input type="text" name="apellidos" class="form-control" value="{{$usuario->apellidos}}">
                                        </div> 
                                        <div class="form-group">
                                           <label for="descripcion">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{$usuario->email}}">
                                        </div>
                                        <div class="form-group">
                                           <label for="descripcion">Clave</label>
                                            <input type="password" name="clave" class="form-control" value="{{$usuario->password}}">
                                        </div> 
                                        <div class="form-group">
                                           <label for="descripcion">Tipo de Usuario</label>
                                            <select name="tipoUsuario" class="form-control">
                                                @if($usuario->tipoUsuario == "cliente")
                                                <option value="cliente" selected>Actual: Cliente</option>
                                                @elseif($usuario->tipoUsuario == "distribuidor")
                                                <option value="distribuidor" selected>Actual: Distribuidor</option>
                                                @elseif($usuario->tipoUsuario == "admin")
                                                <option value="admin" selected>Actual: Administrador</option>
                                                @endif

                                                <option value="cliente">Cliente</option>
                                                <option value="distribuidor">Distribuidor</option>
                                                <option value="admin">Administrador</option>
                                            </select>
                                        </div> 

                                                    






                                        <input type="hidden" name="codigoDistribuidor" class="form-control" value="{{$usuario->codigoDistribuidor}}">
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