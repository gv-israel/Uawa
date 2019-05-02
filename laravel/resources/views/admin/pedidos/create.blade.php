@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Nuevo Pedido')
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

                                        {!!Form::open(array('url'=>'admin/pedidos', 'method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Usuario</label>
                                                    <input type="text" name="nombre" class="form-control" required value="{{old('usuario')}}">
                                                </div>                                            
                                            </div>  
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Categoria</label>
                                                    <select name="deCategoria" class="form-control">
                                                        
                                                    </select>
                                                </div> 
                                            </div>                                            
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Codigo</label>
                                                    <input type="text" name="codigoPedido" class="form-control" required value="{{old('codigoPedido')}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Descripción</label>
                                                    <input type="text" name="descripcion" class="form-control" required value="{{old('descripcion')}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Coste</label>
                                                    <input type="text" name="coste" class="form-control" required value="{{old('coste')}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">PVP</label>
                                                    <input type="text" name="pvp" class="form-control" required value="{{old('pvp')}}">
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