@extends('layout.app',['bodyClass'=>'shop page-layout-left-sidebar'])
@section('titulo', 'Tienda de Camisetas Realidad Virtual')
@section('head')
<div class="heading-container heading-resize heading-no-button">
        <div class="heading-background heading-parallax" style="background-image: url('imagenes/fondos/tienda.png');">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="heading-wrap">
                  <div class="page-title">
                    <h1>Tienda</h1>
                    <div class="page-breadcrumb">
                      <ul class="breadcrumb">
                        <li><span><a class="home" href="#"><span>Inicio</span></a></span></li>
                        <li><span>Tienda</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('contenido')
<div class="shop-toolbar">
        <div class="container">
          <div class="row">
            <div class="col-md-12 main-wrap pull-right">
              <div class="view-mode">
                <a class="grid-mode active" title="Grid"><i class="fa fa-th"></i></a>
                <a class="list-mode" title="List" href="#"><i class="fa fa-th-list"></i></a>
              </div>
              <form class="shop-ordering clearfix">
                <div class="shop-ordering-select">
                  <label class="hide">Orden:</label>
                  <div class="form-flat-select">
                    <select name="orderby" class="orderby">
                      <option value="menu_order" selected='selected'>Predefinido</option>
                      <option value="popularity">Populares/option>
                      <option value="rating">Mas valorados</option>
                      <option value="date">Nuevos</option>
                      <option value="price">Precio: - a +</option>
                      <option value="price-desc">Precio: + a -</option>
                    </select>
                    <i class="fa fa-angle-down"></i>
                  </div>
                </div>
                <div class="shop-ordering-select">
                  <label class="hide">Mostrar:</label>
                  <div class="form-flat-select">
                    <select name="per_page" class="per_page">
                      <option value="12" selected='selected'>12</option>
                      <option value="24">24</option>
                      <option value="36">36</option>
                    </select>
                    <i class="fa fa-angle-down"></i>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="content-container">
        <div class="container">
          <div class="row">
            <div class="col-md-9 main-wrap">
              <div class="main-content">
                <div class="shop-loop grid">
                  <ul class="products"> 
                  @foreach ($articulos as $art)
                    @include('tienda.articulo', ['art' => $art])
                  @endforeach
                  </ul>
                </div>
                <nav class="shop-pagination">
                  <p class="shop-result-count">
                    Viendo 1&ndash;12 de 14 resultados
                  </p>
                  <div class="paginate">
                    <div class="paginate_links">
                      <span class='page-numbers current'>1</span>
                      <a class='page-numbers' href='#'>2</a>
                      <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
            <div class="col-md-3 sidebar-wrap">
              @include('tienda.filtros')
            </div>
          </div>
        </div>
      </div>
@endsection

