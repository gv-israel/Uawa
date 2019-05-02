@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Nueva Pregunta')
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

                                        {!!Form::open(array('url'=>'admin/preguntas', 'method'=>'POST','autocomplete'=>'off'))!!}
                                        <div class="form-group">
                                            <label for="pregunta">Pregunta</label>
                                            <input type="text" name="pregunta" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="respuesta">Respuesta</label>
                                            <textarea name="respuesta" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <select name="categoria" class="form-control">
                                            <option value="Preguntas frecuentes">Preguntas frecuentes</option>
                                            <option value="Pago">Pago</option>
                                            <option value="Envío">Envío</option>
                                            <option value="Devoluciones">Devoluciones</option>
                                            <option value="Cambios">Cambios</option>
                                            <option value="Tecnología">Tecnología</option>
                                            <option value="Tarjeta regalo">Tarjeta regalo</option>
                                            <option value="Ticket regalo">Ticket regalo</option>
                                            <option value="Atención al cliente">Atención al cliente</option>
                                            <option value="Disponibilidad de artículos">Disponibilidad de artículos</option>
                                            <option value="Descuentos y códigos promocionales">Descuentos y códigos promocionales</option>
                                            <option value="Modificaciones de datos y pedidos">Modificaciones de datos y pedidos</option>
                                        </select>
                                        </div>
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