@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Preguntas Frecuentes')
@section('head')
<div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="#" class="home"><span>Inicio</span></a></span></li>
							<li><span>Preguntas Frecuentes</span></li>
						</ul>
					</div>
				</div>
			</div>
@endsection
@section('contenido')
<div class="content-container">
				<div class="container">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">
								<div class="row">
									<div class="col-sm-8">
										<div class="wpb_wrapper">
											@php
			                                $categorias = DB::table('preguntas_respuestas')
			                                ->select('categoria')
			                                ->groupBy('categoria')
			                                ->orderBy('id')
			                                ->get();
			                                @endphp	
											@foreach($categorias as $categoria)
											<div class="row inner faq-wrapper">
												<div class="col-sm-12">
			                                    <div class="title text-uppercase">
			                                        <h2>{{$categoria->categoria}}</h2>
			                                    </div>

			                                    @php
			                                    $preguntas = DB::table('preguntas_respuestas')
			                                    ->where('categoria','=',$categoria->categoria)
			                                    ->get();
			                                    @endphp

			                                    @foreach($preguntas as $pregunta)
			                                        <div class="toggle toggle_default toggle_color_default">
			                                            <div class="toggle_title">
			                                                <h4>{{$pregunta->pregunta}}</h4> <i class="toggle_icon"></i>
			                                            </div>
			                                            <div class="toggle_content"><p>{!!$pregunta->respuesta!!}</p></div>
			                                        </div>
			                                        
			                                    @endforeach
			                                    

			                                    </div></div>
			                                @endforeach

										</div>
									</div>
									<div class="col-sm-4">
										@include('layout.bloque-contacto')
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection