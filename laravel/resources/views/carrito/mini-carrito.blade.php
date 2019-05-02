@if(!carrito_array())
<div class="minicart">
    <div class="minicart-header no-items show"> TU CARRO DE COMPRA ESTÁ VACÍO. </div>
    <div class="minicart-footer">
        <div class="minicart-actions clearfix">
            <a class="button" href="{{url('tienda')}}"> <span class="text">EMPIEZA A COMPRAR</span> </a>
        </div>
    </div>
</div>

@else

<div class="minicart" style="display:none">
    <div class="minicart-header">{{carrito_numArticulos()}} articulos en el carrito</div>
    <div class="minicart-body">




@foreach(carrito_array() as $articulo)
        <div class="cart-product clearfix">
            <div class="cart-product-image">
                <a class="cart-product-img" href="#">
                    {!!imagenArticulo($articulo->id,100,150)!!}
                </a>
            </div>
            <div class="cart-product-details">
                <div class="cart-product-title">
                    <a href="{{url('ver')}}/{{$articulo->slug}}">{{$articulo->nombre}}</a>
                </div>
                <div class="cart-product-quantity-price">
                    {{$articulo->cantidad}} x <span class="amount">&#36;{{number_format($articulo->pvp * $articulo->cantidad, 2)}}</span>
                </div>
            </div>
            <a href="{{route('carrito-eliminar', $articulo->slug)}}" class="remove" title="Eliminar articulo">&times;</a>
        </div>

@endforeach


    </div>
    <div class="minicart-footer">
        <div class="minicart-actions clearfix">
            <a class="checkout-button button" href="{{route('carrito-ver')}}">
                <span class="text">Ir al Carrito</span>
            </a>
        </div>
    </div>
</div>

@endif