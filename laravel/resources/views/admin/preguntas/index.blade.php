@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Listado de Preguntas y Respuestas')
@section('contenido')
<div class="content-container">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                @include('admin.preguntas.busqueda')
                                <a href="/admin/preguntas/create" class="pull-right text-uppercase"><button class="btn btn-primary">Nueva Pregunta</button></a>

                                
                                
                                <div class="row col-md-12">
                                @foreach($categorias as $categoria)
                                    <div class="title text-uppercase">
                                        <h2>{{$categoria->categoria}}</h2>
                                    </div>

                                    @php
                                    $preguntas = DB::table('preguntas_respuestas')
                                    ->where('categoria','=',$categoria->categoria)
                                    ->get();
                                    @endphp

                                    @foreach($preguntas as $pregunta)
                                        <div class="toggle toggle_default toggle_color_default">
                                            <div class="toggle_title">
                                                <h4>[#{{$pregunta->id}}] {{$pregunta->pregunta}}</h4>
                                                    <i class="toggle_icon"></i>
                                            </div>
                                            <div class="toggle_content">
                                                   <p class="pull-right">
                                                <a href="" data-target="#modal-eliminar-{{$pregunta->id}}" data-toggle="modal" class="pull-right text-uppercase"><button class="btn btn-danger">Eliminar</button></a>
                                            <a href="{{URL::action('PreguntaController@edit', $pregunta->id)}}" class="pull-right text-uppercase"><button class="btn btn-info">Editar</button></a>
                                                </p><p>
                                                {!!$pregunta->respuesta!!}
                                                </p>
                                                
                                            </div>
                                        </div>
                                        @include('admin.preguntas.modal-eliminar')
                                    @endforeach
                                    
                                @endforeach
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