  @extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Seguimiento del Pedido')
@section('head')
<div class="heading-container">
	<div class="container heading-standar">
		<div class="page-breadcrumb">
			<ul class="breadcrumb">
				<li><span><a href="{{url('/')}}" class="home"><span>Inicio</span></a></span></li>
				<li><span>Seguimiento del Pedido</span></li>
			</ul>
		</div>
	</div>
</div>



@endsection

@section('contenido')

<div class="content-container" style="background-image: url('http://easymail.com.co/wp-content/uploads/2017/09/alistamiento.jpg'); min-height: auto; background-size: cover;
    background-position: center;">
	
	<div class="container text-center">
		<h1 class="text-uppercase">Seguimiento de envios</h1>
		
		<form>
			<input type="text" name="" class="form-control center-block" placeholder="ID DE SEGUIMIENTO..." style="width: 40%">
            <input type="submit" class="searchsubmit hidden" name="submit" value="Buscar" /><br><br>
        </form>

	</div>

</div>

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
    border: 0px solid;
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
</style>
@endsection