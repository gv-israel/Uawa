@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Listado de Articulos')
@section('contenido')
<div class="content-container">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                @include('admin.articulos.busqueda')
                                <a href="/admin/articulos/create" class="pull-right text-uppercase"><button class="btn btn-primary">Nuevo Articulo</button></a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condens ed table hover">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Stock</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    @foreach ($articulos as $art)
                                        <tr>
                                            <td align="center" class="no-padding">
                                            	<?php
                                                    //CONSULTA IMAGEN DESTACADA
                                                    $img = DB::table('articulos_imagenes')
                                                    ->select(DB::raw('MAX(destacado) as destacado'))
                                                    ->select('imagen')
                                                    ->where('deArticulo','=',$art->id)
                                                    ->where('destacado','=',1)
                                                    ->pluck('imagen')
                                                    ->first();
                                                  
                                                ?>
                                                @if($img)
													<img src="http://uawa/storage/articulo_miniatura/{{$img}}" width="100">
                                                @else
                                                	<img src="http://uawa/imagenes/default.png" width="100">
                                                @endif

                                            	





                                            </td>
                                            <td class="text-uppercase">{{$art->codigo}}</td>
                                            <td>{{$art->nombre}}</td>
                                            <td>{{$art->categoria}}</td>
                                            <td align="center">
                                                <?php
                                                    //CONSULTA STOCK DE COLUMNAS DE TALLAS
                                                    $stock = DB::table('articulos')
                                                    
                                                    ->select(DB::raw('
                                                        sum(
                                                        IFNULL(talla_0, 0)
                                                        +IFNULL(talla_2, 0)
                                                        +IFNULL(talla_4, 0)
                                                        +IFNULL(talla_6, 0)
                                                        +IFNULL(talla_8, 0)
                                                        +IFNULL(talla_10, 0)
                                                        +IFNULL(talla_12, 0)
                                                        +IFNULL(talla_14, 0)
                                                        +IFNULL(talla_m_s, 0)
                                                        +IFNULL(talla_m_m, 0)
                                                        +IFNULL(talla_m_l, 0)
                                                        +IFNULL(talla_m_xl, 0)
                                                        +IFNULL(talla_h_s, 0)
                                                        +IFNULL(talla_h_m, 0)
                                                        +IFNULL(talla_h_l, 0)
                                                        +IFNULL(talla_h_xl, 0)
                                                        +IFNULL(talla_h_xxl, 0)
                                                        +IFNULL(talla_h_xxxl, 0)
                                                    ) AS stock'))
                                                    ->where('id','=',$art->id)
                                                    ->pluck('stock');

                    								if($art->tipo == "camiseta")
                                                    {
	                                                    if($stock[0] > 0)
	                                                    {
	                                                    	//SI HAY CONTEO DE CAMISETAS MUESTRA EL VALOR

	                                                    	echo $stock[0];
	                                                    }
		                                                else
		                                                {
		                                                	echo "0sss";
	                                                	}
	                                                                                                    		
                                                    }
                                                    else

                                                    {

		                                                	// COMPRUEBA SI EN COLUMNA OTROS HAY ALGO
		                                                	$stockO = DB::table('articulos')
		                                                    ->select('stock_otros')
		                                                    ->where('id','=',$art->id)
		                                                    ->pluck('stock_otros')
		                                                    ->first();
		                                                    if($stockO)
		                                                    {
		                                                    	echo $stockO;
		                                                    }
		                                                	else{
		                                                		echo "0ddd";
	                                                	}
                                                    }

                                                
                                                   
                                                ?>


                                                
                                                

                                            </td>
                                            <td>

                                                <a href="" data-target="#modal-eliminar-{{$art->id}}" data-toggle="modal" class="pull-right text-uppercase">
                                                    <button class="btn btn-danger">Eliminar</button>
                                                </a>
                                                <a href="http://uawa/admin/articulos/{{$art->id}}/edit" class="pull-right text-uppercase">
                                                    <button class="btn btn-info">Editar</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @include('admin.articulos.modal-eliminar')
                                    @endforeach
                                    </table>
                            
                                </div>
                                {{$articulos->render()}}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection