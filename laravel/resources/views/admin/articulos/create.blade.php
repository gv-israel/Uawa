@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Nuevo Articulo')
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

                                        {!!Form::open(array('url'=>'admin/articulos', 'method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" name="nombre" class="form-control" required value="{{old('nombre')}}">
                                                </div>                                            
                                            </div>  
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="deCategoria">Categoria</label>
                                                    <select name="deCategoria" class="form-control">
                                                        @foreach ($categorias as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                </div> 
                                            </div>                                            
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="codigo">Codigo</label>

                                                    

                                                    <input type="text" name="codigo" class="form-control disabled" required value="{{old('codigo', $codi) }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="descripcion">Descripción</label>
                                                    <input type="text" name="descripcion" class="form-control" required value="{{old('descripcion')}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="tipo">Tipo</label>
                                                    <select class="form-control" id="tipo" name="tipo" required="">
                                                        <option value="">Seleccionar...</option>
                                                        <option value="camiseta">Camiseta</option>
                                                        <option value="otros">Otros</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="color">Color</label>
                                                    <input type="text" name="color" class="form-control" required value="{{old('color')}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="coste">Coste</label>
                                                    <input type="text" name="coste" class="form-control" required value="{{old('coste')}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pvp">PVP</label>
                                                    <input type="text" name="pvp" class="form-control" required value="{{old('pvp')}}">
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
                                                    <td><input type="text" name="talla_0" class="form-control" value="{{old('talla_0')}}"></td>
                                                    <td><input type="text" name="talla_2" class="form-control" value="{{old('talla_2')}}"></td>
                                                    <td><input type="text" name="talla_4" class="form-control" value="{{old('talla_4')}}"></td>
                                                    <td><input type="text" name="talla_6" class="form-control" value="{{old('talla_6')}}"></td>
                                                    <td><input type="text" name="talla_8" class="form-control" value="{{old('talla_8')}}"></td>
                                                    <td><input type="text" name="talla_10" class="form-control" value="{{old('talla_10')}}"></td>
                                                    <td><input type="text" name="talla_12" class="form-control" value="{{old('talla_12')}}"></td>
                                                    <td><input type="text" name="talla_14" class="form-control" value="{{old('talla_14')}}"></td>

                                                    <td><input type="text" name="talla_m_s" class="form-control" value="{{old('talla_m_s')}}"></td>
                                                    <td><input type="text" name="talla_m_m" class="form-control" value="{{old('talla_m_m')}}"></td>
                                                    <td><input type="text" name="talla_m_l" class="form-control" value="{{old('talla_m_l')}}"></td>
                                                    <td><input type="text" name="talla_m_xl" class="form-control" value="{{old('talla_m_xl')}}"></td>

                                                    <td><input type="text" name="talla_h_s" class="form-control" value="{{old('talla_h_s')}}"></td>
                                                    <td><input type="text" name="talla_h_m" class="form-control" value="{{old('talla_h_m')}}"></td>
                                                    <td><input type="text" name="talla_h_l" class="form-control" value="{{old('talla_h_l')}}"></td>
                                                    <td><input type="text" name="talla_h_xl" class="form-control" value="{{old('talla_h_xl')}}"></td>
                                                    <td><input type="text" name="talla_h_xxl" class="form-control" value="{{old('talla_h_xxl')}}"></td>
                                                    <td><input type="text" name="talla_h_xxxl" class="form-control" value="{{old('talla_h_xxxl')}}"></td>
                                                    
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
                                                        <input type="text" name="stock_otros" class="form-control" value="{{old('stock-otros')}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Imagenes</label>
                                                        <input type="file" name="imagenesOtros" class="form-control" multiple>
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


@section('jquery')
<script type="text/javascript">
$(document).ready(function(){


    $('#tipo').change(function() {
        if ($(this).val() === 'camiseta')
        {
            $('#selectCamisetas').removeClass("hidden");
            $('#selectOtros').addClass("hidden");

/*
            $('#selectCamisetas:input, #selectCamisetas:select').addAttr('required');
            $('#selectOtros:input, #selectOtros:select').removeAttr('required');

            */
        }
        else if ($(this).val() === 'otros')
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
    });



});
</script>
@endsection