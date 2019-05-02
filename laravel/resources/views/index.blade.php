@extends('layout.app')


@section('contenido')
  <div class="content-container no-padding">
    <div class="container-full">
      <div class="row">
		<div class="col-md-12 main-wrap">
		    <div class="main-content">
		    @include('home.slider')
		    @include('home.categorias')
		    @include('layout.footer-servicios')
		    </div>
		</div>
	</div>
	</div>
</div>
@endsection