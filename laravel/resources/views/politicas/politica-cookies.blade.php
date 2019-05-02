@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Politica de Cookies')
@section('head')
<div class="heading-container">
	<div class="container heading-standar">
		<div class="page-breadcrumb">
			<ul class="breadcrumb">
				<li><span><a href="{{url('/')}}" class="home"><span>Inicio</span></a></span></li>
				<li><span>Politica de Cookies</span></li>
			</ul>
		</div>
	</div>
</div>
@endsection

@section('contenido')
<iframe src="https://drive.google.com/file/d/10hFNOFuD4vRWEbGglKKlxz-rUhvCf2BFWOHbykcgLMLJusHTvYWvwmQCI_XXUlZMb-qWWXz1uhfIvIo0/view?usp=sharing" border="0"  class="content-container no-padding" style="width: 100%;"></iframe>
@endsection