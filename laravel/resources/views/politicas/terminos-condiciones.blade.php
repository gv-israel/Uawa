@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Terminos y Condiciones')
@section('head')
<div class="heading-container">
	<div class="container heading-standar">
		<div class="page-breadcrumb">
			<ul class="breadcrumb">
				<li><span><a href="{{url('/')}}" class="home"><span>Inicio</span></a></span></li>
				<li><span>Terminos y Condiciones</span></li>
			</ul>
		</div>
	</div>
</div>
@endsection

@section('contenido')
<iframe src="https://static.pullandbear.net/2/static2/itxwebstandard/legal/pdf/pullandbear_purchase_conditions_es_ES.pdf?ts=20190426030000" border="0"  class="content-container no-padding" style="width: 100%;"></iframe>
@endsection