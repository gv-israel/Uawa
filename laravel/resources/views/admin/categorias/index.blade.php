@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Listado de Categorias')
@section('contenido')
<div class="content-container">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                @include('admin.categorias.busqueda')
                                <a href="/admin/categorias/create" class="pull-right text-uppercase"><button class="btn btn-primary">Nueva Categoria</button></a>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-condensed table hover">
                                    <thead>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        
                                        <th>Opciones</th>
                                    </thead>
                                    @foreach ($categorias as $cat)
                                    <tr>
                                        <td>{{$cat->id}}</td>
                                        <td>{{$cat->nombre}}</td>
                                        <td>{{$cat->descripcion}}</td>
                                        
                                        <td>
                                            
                                            <a href="" data-target="#modal-eliminar-{{$cat->id}}" data-toggle="modal" class="pull-right text-uppercase"><button class="btn btn-danger">Eliminar</button></a>
                                            <a href="{{URL::action('CategoriaController@edit', $cat->id)}}" class="pull-right text-uppercase"><button class="btn btn-info">Editar</button></a>
                                        </td>
                                    </tr>
                                    @include('admin.categorias.modal-eliminar')
                                    @endforeach
                                </table>
                                </div>
                                {{$categorias->render()}}
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