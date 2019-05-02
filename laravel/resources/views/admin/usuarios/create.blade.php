@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Nuevo Usuario')
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

                                        {!!Form::open(array('url'=>'admin/usuarios', 'method'=>'POST','autocomplete'=>'off'))!!}
                                        <div class="form-group">
                                            <label for="nombre">Nombres</label>
                                            <input type="text" name="nombres" class="form-control" value="{{old('nombres')}}">
                                        </div>
                                        <div class="form-group">
                                           <label for="descripcion">Apellidos</label>
                                            <input type="text" name="apellidos" class="form-control" value="{{old('apellidos')}}">
                                        </div> 
                                        <div class="form-group">
                                           <label for="descripcion">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{old('email')}}">
                                        </div>
                                        <div class="form-group">
                                           <label for="descripcion">Clave</label>
                                            <input type="clave" name="clave" class="form-control" value="{{old('clave')}}">
                                        </div> 
                                        <div class="form-group">
                                           <label for="descripcion">Tipo de Usuario</label>
                                            <select name="tipoUsuario" class="form-control">
                                                <option value="cliente">Cliente</option>
                                                <option value="distribuidor">Distribuidor</option>
                                                <option value="admin">Administrador</option>
                                            </select>
                                        </div> 
                                        <input type="hidden" name="codigoDistribuidor" value="COOKIE">
                                        <button class="btn btn-primary" type="submit">Crear</button>
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