@extends('layout.app',['bodyClass'=>'shop','tipoHeader'=>'clasico'])
@section('titulo', 'Tienda de Camisetas Realidad Virtual')
@section('head')
<div class="heading-container">
        <div class="container heading-standar">
          <div class="page-breadcrumb">
            <ul class="breadcrumb">
              <li><span><a href="#" class="home"><span>Inicio</span></a></span></li>
              <li><span>{{$articulo->nombre}}</span></li>
            </ul>
          </div>
        </div>
</div>
@endsection
@section('contenido')
<div class="content-container">
        <div class="container-full">
          <div class="row">
            <div class="col-md-12 main-wrap">
              <div class="main-content">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 no-min-height"></div>
                  </div>
                </div>
                <div class="product">
                  <div class="container">
                    <div class="row summary-container">
                      <div class="col-md-8 col-sm-6 entry-image">
                        @include('articulo.imagenes')
                      </div>
                      <div class="col-md-4 col-sm-6 entry-summary">
                        <div class="summary">
                          @include('tienda.detalles-articulo', ['art' => $articulo])
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="shop-tab-container">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          @include('articulo.pestanas')
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        @include('articulo.productos-relacionados')
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