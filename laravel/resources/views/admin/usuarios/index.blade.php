@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Listado de Usuarios')
@section('contenido')
<div class="content-container">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                @include('admin.usuarios.busqueda')
                                <a href="/admin/usuarios/create" class="pull-right text-uppercase"><button class="btn btn-primary">Nuevo Usuario</button></a>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-condensed table hover">
                                    <thead class="text-uppercase">
                                        <th>ID</th>
                                        <th>Identificador</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Email</th>
                                        <th>Opciones</th>
                                    </thead>
                                    @foreach ($usuarios as $usu)
                                    <tr>
                                        <td>{{$usu->id}}</td>
                                        <td>{{$usu->usuario}}</td>
                                        <td>{{$usu->nombres}}</td>
                                        <td>{{$usu->apellidos}}</td>
                                        <td>{{$usu->email}}</td>
                                        <td>
                                            
                                            <a href="" data-target="#modal-eliminar-{{$usu->id}}" data-toggle="modal" class="pull-right text-uppercase"><button class="btn btn-danger">Eliminar</button></a>
                                            <a href="{{URL::action('UsuarioController@edit', $usu->id)}}" class="pull-right text-uppercase"><button class="btn btn-info">Editar</button></a>
                                        </td>
                                    </tr>
                                    @include('admin.usuarios.modal-eliminar')
                                    @endforeach
                                </table>
                                </div>
                                {{$usuarios->render()}}
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