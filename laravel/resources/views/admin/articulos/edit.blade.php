@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Editar Articulo')
@section('contenido')
<div class="content-container">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row contact-form-wrapper">
                                    <div class="col-sm-12">
                                        @include('layout.errores')

                                        {!!Form::model($articulo,['method'=>'PATCH','action'=>['ArticuloController@update',$articulo->id],'files'=>'true'])!!}
                                        {{Form::token()}}
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" name="nombre" class="form-control" required value="{{$articulo->nombre}}">
                                                </div>                                            
                                            </div>  
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Categoria</label>
                                                    <select name="deCategoria" class="form-control">

                                                        @foreach ($categorias as $cat)
                                                            @if($cat->id == $articulo->deCategoria)
                                                                <option value="{{$cat->id}}" selected>{{$cat->nombre}}</option>
                                                            @else
                                                                <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div> 
                                            </div>                                            
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Codigo</label>
                                                    <input type="text" name="codigo" class="form-control" required value="{{$articulo->codigo}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Descripción</label>
                                                    <input type="text" name="descripcion" class="form-control" required value="{{$articulo->descripcion}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="tipo">Tipo</label>
                                                    <select class="form-control" id="tipo" name="tipo" required="">
                                                        <option value="">Seleccionar...</option>
                                                        @if($articulo->tipo == "camiseta")
                                                        	<option value="camiseta" selected="
                                                        	">Camiseta</option>
                                                        	<option value="otros">Otros</option>
                                                        @else
                                                        	<option value="camiseta">Camiseta</option>
                                                       		<option value="otros" selected="">Otros</option>
                                                        @endif
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="color">Color</label>
                                                    <input type="text" name="color" class="form-control" required value="{{$articulo->color}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Coste</label>
                                                    <input type="text" name="coste" class="form-control" required value="{{$articulo->coste}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">PVP</label>
                                                    <input type="text" name="pvp" class="form-control" required value="{{$articulo->pvp}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-3 col-md-3 col-xs-6 hidden" id="selectCamisetas">
                                                
                                                <table class="table">
                                                    
                                                  <tr>
                                                    
                                                    <th colspan="8">NIÑO</th>
                                                    <th colspan="4">MUJER</th>
                                                    <th colspan="6">HOMBRE</th>
                                                  </tr>
                                                  <tr>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                    <td>6</td>
                                                    <td>8</td>
                                                    <td>10</td>
                                                    <td>12</td>
                                                    <td>14</td>
                                                    <td>S</td>
                                                    <td>M</td>
                                                    <td>L</td>
                                                    <td>XL</td>
                                                    <td>S</td>
                                                    <td>M</td>
                                                    <td>L</td>
                                                    <td>XL</td>
                                                    <td>XXL</td>
                                                    <td>XXXL</td>
                                                  </tr>
                                                  <tr>
                                                    <td><input type="text" name="talla_0" class="form-control" value="{{$articulo->talla_0}}"></td>
                                                    <td><input type="text" name="talla_2" class="form-control" value="{{$articulo->talla_2}}"></td>
                                                    <td><input type="text" name="talla_4" class="form-control" value="{{$articulo->talla_4}}"></td>
                                                    <td><input type="text" name="talla_6" class="form-control" value="{{$articulo->talla_6}}"></td>
                                                    <td><input type="text" name="talla_8" class="form-control" value="{{$articulo->talla_8}}"></td>
                                                    <td><input type="text" name="talla_10" class="form-control" value="{{$articulo->talla_10}}"></td>
                                                    <td><input type="text" name="talla_12" class="form-control" value="{{$articulo->talla_12}}"></td>
                                                    <td><input type="text" name="talla_14" class="form-control" value="{{$articulo->talla_14}}"></td>

                                                    <td><input type="text" name="talla_m_s" class="form-control" value="{{$articulo->talla_m_s}}"></td>
                                                    <td><input type="text" name="talla_m_m" class="form-control" value="{{$articulo->talla_m_m}}"></td>
                                                    <td><input type="text" name="talla_m_l" class="form-control" value="{{$articulo->talla_m_l}}"></td>
                                                    <td><input type="text" name="talla_m_xl" class="form-control" value="{{$articulo->talla_m_xl}}"></td>

                                                    <td><input type="text" name="talla_h_s" class="form-control" value="{{$articulo->talla_h_s}}"></td>
                                                    <td><input type="text" name="talla_h_m" class="form-control" value="{{$articulo->talla_h_m}}"></td>
                                                    <td><input type="text" name="talla_h_l" class="form-control" value="{{$articulo->talla_h_l}}"></td>
                                                    <td><input type="text" name="talla_h_xl" class="form-control" value="{{$articulo->talla_h_xl}}"></td>
                                                    <td><input type="text" name="talla_h_xxl" class="form-control" value="{{$articulo->talla_h_xxl}}"></td>
                                                    <td><input type="text" name="talla_h_xxxl" class="form-control" value="{{$articulo->talla_h_xxxl}}"></td>
                                                    
                                                  </tr>
                                                    <tr>
                                                    <td colspan="18">
                                                        <input type="file" name="imagenesVariacion[]" class="form-control" multiple>
                                                    </td>
                                                  </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-6 col-sm-3 col-md-3 col-xs-12 hidden" id="selectOtros" >
                                                    <div class="form-group">
                                                        <label>Stock</label>
                                                        <input type="text" name="stock_otros" class="form-control" value="{{$articulo->stock_otros}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Imagenes</label>
                                                        <input type="file" name="imagenesOtros[]" class="form-control" multiple>
                                                    </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12" id="" >
                                                @foreach($imagenes as $imagen)
                                                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-6 text-center" id="" >
                                                        @if($imagen->destacado == 1)
                                                        <div style="width: 15px: height: 15px; color: black; position: absolute; float: right; background-color: yellow; padding: 5px;">&#9733;</div>
                                                        @endif
                                                        <img src="http://uawa/storage/articulo_miniatura/{{$imagen->imagen}}">                                                        
                                                            <a href="" data-target="#modal-eliminarImagen-{{$imagen->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>

                                                            @if($imagen->destacado != 1)
                                                            <br>
                                                            <a href="#">
                                                            <button class="btn btn-primary btnDestacar" idDestacar="{{$imagen->id}}" type="button">Destacar</button>
                                                            </a>
                                                            @endif
                                                            
                                                            </ul>
                                                            
                                                        
                                            	   </div>
                                               
                                                @endforeach
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <button class="btn btn-primary" type="submit">Modificar</button>

                                            </div>

                                        </div>


                                        {!!Form::close()!!}

                                        @foreach($imagenes as $imagen)
                                        @include('admin.articulos.modal-eliminarImagen')
                                        @endforeach
                                    </div>
                                </div>
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
<script type="text/javascript">
$(document).ready(function(){


	function ocultarMostrar(){
        if ($('#tipo').val() === 'camiseta')
        {
            $('#selectCamisetas').removeClass("hidden");
            $('#selectOtros').addClass("hidden");

/*
            $('#selectCamisetas:input, #selectCamisetas:select').addAttr('required');
            $('#selectOtros:input, #selectOtros:select').removeAttr('required');

            */
        }
        else if ($('#tipo').val() === 'otros')
        {
            $('#selectOtros').removeClass("hidden");
            $('#selectCamisetas').addClass("hidden");

/*
            $('#selectOtros:input, #selectOtros:select').addAttr('required');
            $('#selectCamisetas:input, #selectCamisetas:select').removeAttr('required');
             */
        }
        else
        {
            $('#selectCamisetas').addClass("hidden");
            $('#selectOtros').addClass("hidden");
        }		
	}


	//MUESTRA O OCULTA LOS CAMPOS DEL TIPO SELECCIONADO AL CARGAR
	ocultarMostrar();

	//MUESTRA O OCULTA LOS CAMPOS SI SE CAMBIA EL TIPO
    $('#tipo').change(function() {
    	ocultarMostrar();
    });


    $('.btnDestacar').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        $.ajax({
            url: "{{ url('/admin/imagenes/destacar') }}",
            method: 'post',
            data: {
                id: $(this).attr("idDestacar"),
            },
        success: function(result){
            alert(result.success);

            window.location.reload();
        }});
    });
           

    



});
</script>
@endsection