@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Detalle del Pedido')
@section('head')
<div class="heading-container">
	<div class="container heading-standar">
		<div class="page-breadcrumb">
			<ul class="breadcrumb">
				<li><span><a href="{{url('/')}}" class="home"><span>Inicio</span></a></span></li>
				<li><span><a href="{{url('/carrito')}}" class="home"><span>Carrito de compra</span></a></span></li>
				<li><span>Detalle del pedido</span></li>
			</ul>
		</div>
	</div>
</div>


@endsection
@section('contenido')
	<div class="content-container no-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						<h4 class="text-uppercase">Datos de envio</h4>


						@php

						$datosEnvio = DB::table('usuarios_datos')->where('id','=',Auth::user()->id)->first();

						@endphp

						@isset($datosEnvio->cedula) {{$datosEnvio->cedula}} @endisset<br>
						@isset($datosEnvio->nombres) {{$datosEnvio->nombres}} @endisset @isset($datosEnvio->apellidos) {{$datosEnvio->apellidos}} @endisset<br>
						@isset($datosEnvio->provincia) {{$datosEnvio->provincia}} @endisset
						@isset($datosEnvio->poblacion) - {{$datosEnvio->poblacion}} @endisset
						@isset($datosEnvio->codigoPostal) ({{$datosEnvio->codigoPostal}}) @endisset<br>
						@isset($datosEnvio->direccion) {{$datosEnvio->direccion}} @endisset<br>
						@isset($datosEnvio->direccion2) {{$datosEnvio->direccion2}} @endisset<br>

						<br>




						</div>
						<div class="col-md-6">
						<h4 class="text-uppercase">Datos de facturación</h4>

						@if(isset($datosEnvio->mismosDatos) && $datosEnvio->mismosDatos == 1)
							
							@isset($datosEnvio->cedula) {{$datosEnvio->cedula}} @endisset<br>
							@isset($datosEnvio->nombres) {{$datosEnvio->nombres}} @endisset @isset($datosEnvio->apellidos) {{$datosEnvio->apellidos}} @endisset<br>
							@isset($datosEnvio->provincia) {{$datosEnvio->provincia}} @endisset
							@isset($datosEnvio->poblacion) - {{$datosEnvio->poblacion}} @endisset
							@isset($datosEnvio->codigoPostal) ({{$datosEnvio->codigoPostal}}) @endisset<br>
							@isset($datosEnvio->direccion) {{$datosEnvio->direccion}} @endisset<br>
							@isset($datosEnvio->direccion2) {{$datosEnvio->direccion2}} @endisset<br>

						@else
							@isset($datosEnvio->facCedula) {{$datosEnvio->facCedula}} @endisset<br>
							@isset($datosEnvio->facNombres) {{$datosEnvio->facNombres}} @endisset @isset($datosEnvio->facApellidos) {{$datosEnvio->facApellidos}} @endisset<br>
							@isset($datosEnvio->facProvincia) {{$datosEnvio->facProvincia}} @endisset
							@isset($datosEnvio->facPoblacion) - {{$datosEnvio->facPoblacion}} @endisset
							@isset($datosEnvio->facCodigoPostal) ({{$datosEnvio->facCodigoPostal}}) @endisset<br>
							@isset($datosEnvio->facDireccion) {{$datosEnvio->facDireccion}} @endisset<br>
							@isset($datosEnvio->facDireccion2) {{$datosEnvio->facDireccion2}} @endisset<br>
						@endif
						</div>
						<div class="col-md-12 main-wrap">
							<div class="main-content">
							<form method="POST" action="{{ route('pagar') }}">
								<div class="shop">
									
									@csrf
									<table class="table shop_table cart">
											<thead>
												<tr>
													
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
															{{$articulo->cantidad}}
														</div>
													</td>
													<td class="product-subtotal hidden-xs text-center">
														<span class="amount">&#36;{{number_format($articulo->pvp * $articulo->cantidad, 2)}}</span>
													</td>
												</tr>
												@endforeach
											</tbody>
									</table>
										
									
									<div class="cart-collaterals">
										<div class="cart_totals">
											<h2>Metodo de Envio</h2>
											<div>
												@include('carrito.metodo-envio')
											
											</div>
											
											<h2>Total</h2>
											<table>
												<tr class="cart-subtotal">
													<th>Subtotal</th>
													<td><span class="amount">&#36;{{number_format(carrito_subtotal(), 2)}}</span></td>
												</tr>
												<tr class="shipping">
													<th>Gastos de envío</th>
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
													<td><strong><span class="amount">&#36;{{number_format($total, 2)}}</span></strong></td>
												</tr>
											</table>

											<div class="wc-proceed-to-checkout">
												<a class="btn btn-danger checkout-button lookbook-action pull-left" href="{{url('carrito')}}"><i class="fa fa-chevron-left"></i><span> Modificar carrito</span></a>
												<button type="submit" class="checkout-button button alt wc-forward pull-right">Realizar Compra</button>
												
											</div>
										</div>
										<div class="cross-sells">
											<h2>Metodo de pago</h2>
											@php
											$metodosPago = DB::table('metodos_pago')->where('activo','=',1)->get();
											@endphp
											<div class="text-center">
												
											@foreach($metodosPago as $metodo)
											<label>

												@php
												if(Session::get('carrito-pago') == $metodo->slug)
													$checkE = 'checked';
												else
													$checkE = '';
												@endphp

												

												<input type="radio" name="metodoPago" value="{{$metodo->slug}}" {{$checkE}}>
												@if($metodo->imagen)
												<span style="width: 30%; height: 40px;" data-title="{{$metodo->entidad}}">
													<img src="{{asset('imagenes/metodos-pago/'.$metodo->imagen)}}" alt="{{$metodo->entidad}}" data-toggle="tooltip" title="{{$metodo->entidad}}">
													<span class="title">{{$metodo->entidad}}</span>
												</span>
												@else
												{{$metodo->entidad}}
												@endif
												 
											</label>
											@endforeach
											</div>

                    

                

										</div>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>















@endsection



@section('jquery')
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//ACTUALIZAR METODO ENVIO
$("input[name=metodoEnvio]").on('click', function(e){
	e.preventDefault();
	var transporte = $(this).val();
	window.location.href = "{{url('carrito/envio')}}"+"/"+ transporte;
});
//ACTUALIZAR METODO PAGO
$("input[name=metodoPago]").on('click', function(e){
	e.preventDefault();
	var pago = $(this).val();
	window.location.href = "{{url('carrito/pago')}}"+"/"+ pago;
});

</script>

<style type="text/css">

label{
    display: inline-block;
    margin-left: 0px;
    border: 2px solid;
    padding: 5px;
    text-align: center;
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