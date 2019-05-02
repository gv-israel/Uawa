  @extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Carrito de compra')
@section('head')
<div class="heading-container">
	<div class="container heading-standar">
		<div class="page-breadcrumb">
			<ul class="breadcrumb">
				<li><span><a href="{{url('/')}}" class="home"><span>Inicio</span></a></span></li>
				<li><span>Carrito de compra</span></li>
			</ul>
		</div>
	</div>
</div>



@endsection
@section('contenido')
@if(count($carrito))
<div class="container text-uppercase">
<a class="btn btn-primary lookbook-action" href="{{url('tienda')}}"><i class="fa fa-chevron-left"></i><span> Seguir comprando</span></a>
<a class="btn btn-primary lookbook-action pull-right" href="{{url('detalle-pedido')}}"><span>Proceder al pago</span> <i class="fa fa-chevron-right"></i></a>
</div>

	<div class="content-container no-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">
								<form method="">
								@csrf
								<div class="shop">
									<form>
										
										<table class="table shop_table cart">
											<thead>
												<tr>
													<th class="product-remove hidden-xs">&nbsp;</th>
													<th class="product-thumbnail hidden-xs">&nbsp;</th>
													<th class="product-name">Articulo</th>
													<th class="product-price text-center">Precio</th>
													<th class="product-quantity text-center">Cantidad</th>
													<th class="product-subtotal text-center hidden-xs">Total</th>
												</tr>
											</thead>
											<tbody>
												@foreach($carrito as $articulo)
												<tr class="cart_item">
													<td class="product-remove hidden-xs">
														<a href="{{route('carrito-eliminar', $articulo->slug)}}" class="remove" title="Eliminar este articulo">&times;</a>
													</td>
													<td class="product-thumbnail hidden-xs">
														{!!imagenArticulo($articulo->id,100,150)!!}
		                                                
													</td>
													<td class="product-name">
														<a href="#">{{$articulo->nombre}}</a>
														<dl class="variation">
															<dt class="variation-Color">Color:</dt>
															<dd class="variation-Color"><p>Green</p></dd>
															<dt class="variation-Size">Size:</dt>
															<dd class="variation-Size"><p>Extra Large</p></dd>
														</dl>
													</td>
													<td class="product-price text-center">
														<span class="amount">&#36;{{number_format($articulo->pvp, 2)}}</span>
													</td>
													<td class="product-quantity text-center">
														<div class="quantity text-center">
															<input type="number" step="1" min="1" max="100" name="cantidad" value="{{$articulo->cantidad}}" title="Cantidad" class="input-text qty text" id="articulo_{{$articulo->id}}" style="display: inline;"
															data-href="{{route('carrito-actualizar',[$articulo->slug, null])}}"
																data-id="{{$articulo->id}}" />
														
														</div>
													</td>
													<td class="product-subtotal hidden-xs text-center">
														<span class="amount">&#36;{{number_format($articulo->pvp * $articulo->cantidad, 2)}}</span>
													</td>
												</tr>
												@endforeach






												
												<tr>
													<td colspan="6" class="actions">
														<div class="coupon">
															<label for="coupon_code">Cupon:</label> 
															<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Codigo de cupon"/> 
															<input type="submit" class="button" name="apply_coupon" value="Aplicar cupon"/>
														</div>
														<a href="{{route('carrito-vaciar')}}"><input type="button" class="button update-cart-button" name="update_cart" value="vaciar carrito"/></a>
														
													</td>
												</tr>
											</tbody>
										</table>
										
									</form>
									<div class="cart-collaterals">
										
										<div class="cart_totals">
											

											<h2>Total</h2>
											<table>
												<tr class="cart-subtotal">
													<th>Subtotal</th>
													<td><span class="amount">&#36;{{number_format(carrito_subtotal(), 2)}}</span></td>
												</tr>
												<tr class="shipping">
													<div class="modal fade" id="seleccionarPago" tabindex="-1" role="dialog" aria-hidden="true">
													  <div class="modal-dialog">
													    <div class="modal-content" style="background-color: transparent !important;">
													    	@include('carrito.metodo-envio')
													    </div>
													  </div>
													</div>
													<th>Gastos de envío (<a href="#" data-toggle="modal" data-target="#seleccionarPago"><i class="fa fa-truck" aria-hidden="true"></i> seleccionar</a>)</th>
													<td><span class="amount">
														
															@if(carrito_subtotal() >= 20 && carrito_valorEnvio()>0)
															<del>&#36;{{number_format(carrito_valorEnvio(), 2)}}</del>
															<span class="text-primary">GRATIS</span>
															@else
															&#36;{{number_format(carrito_valorEnvio(), 2)}}
															@endif
														


														
													</span></td>
												</tr>
												<tr class="order-total">
													<th>Total</th>
													<td><strong><span class="amount">&#36;{{number_format(carrito_total(), 2)}}</span></strong></td>
												</tr>
											</table>
											<div class="wc-proceed-to-checkout">
												<a href="{{route('detalle-pedido')}}" class="checkout-button button alt wc-forward">Proceder al Pago</a>
											</div>
										</div>
										<div class="cross-sells">
											<h2>Quizas le pueda interesar&hellip;</h2>
											<ul class="products columns-2">
											@php
											    	$articulos=DB::table('articulos as a')
										            ->join('categorias as c', 'c.id', '=', 'a.deCategoria')
										            //->join('articulos_imagenes as ai', 'ai.deArticulo', '=', 'a.id')
										            ->select('a.id','a.nombre','a.codigo','a.pvp','c.nombre as categoria','a.estado','a.descripcion','a.slug')
										            //->selectRaw('MAX(ai.destacado) as destacado')
										            //->selectRaw("(CASE WHEN MAX(ai.destacado)='1' THEN  ELSE '0' END) as destacado")
										    		//->where('a.nombre','LIKE','%'.$consulta.'%')
										            //->orWhere('a.codigo','LIKE','%'.$consulta.'%')
										    		->where('a.estado','=',1)
										            ->groupBy('a.id')
										            ->orderBy('a.id','desc')
										    		->paginate(2);
											@endphp
											@foreach ($articulos as $art)
							                    @include('tienda.articulo', ['art' => $art])
							                @endforeach
											</ul>
										</div>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
@else
	@include('carrito.carrito-vacio')
@endif
@endsection



@section('jquery')
<script type="text/javascript">
$(document).ready(function(){
	//ACTUALIZAR CANTIDAD ARTICULO
	$("input[name=cantidad]").on('change', function(e){
		e.preventDefault();

		var id = $(this).data('id');
		var href = $(this).data('href');
		var cantidad = $(this).val();

		window.location.href = href + '/'+cantidad;
	});
	//ACTUALIZAR METODO ENVIO
	$("input[name=metodoEnvio]").on('click', function(e){
		e.preventDefault();
		var transporte = $(this).val();
		window.location.href = "{{url('carrito/envio')}}"+"/"+ transporte;
	});

});
</script>


<style type="text/css">

label{
    display: inline-block;
    margin-left: 0px;
    border: 2px solid;
    padding: 5px;
    text-align: center;
    background-color: white;
    
}

/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img + span {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img + span{
	outline: 2px solid #f00;
	filter: grayscale(0);
-webkit-filter: grayscale(0);
}

/* CHECKED STYLES */
[type=radio]:not(:checked) + span{
/*outline: 8px solid #000;*/
filter: grayscale(100%) !important;
 
-webkit-filter: grayscale(100%) !important;
 
transition:filter 0.4s !important;
 
-webkit-transition:-webkit-filter 1s !important;
}

span.title {
    display: none;
}
[type=radio]:hover + span.title {
    display: inline-block;
    background-color: red;
}
</style>
@endsection
