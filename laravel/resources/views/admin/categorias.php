@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Categorias')
@section('head')
<div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="#" class="home"><span>Inicio</span></a></span></li>
							<li><span>Categorias</span></li>
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
											<div class="row inner faq-wrapper">
												<div class="col-sm-12">
													<div class="content_element title">
														<h2>Preguntas Generales</h2>
													</div>
													<div class="toggle toggle_default toggle_color_default">
														<div class="toggle_title">
															<h4>Como me pongo en contacto?</h4>
															<i class="toggle_icon"></i>
														</div>
														<div class="toggle_content">
															<p>
																Envienos un correo electronico
																<a href="mailto:contacto@uawa.ec">contacto@uawa.ec</a>
															</p>
														</div>
													</div>
													<div class="toggle toggle_default toggle_color_default">
														<div class="toggle_title">
															<h4>Donde estan ubicados? </h4>
															<i class="toggle_icon"></i>
														</div>
														<div class="toggle_content">
															<p>Somos una empresa digital con oficinas en El Arenal 380, Calderón. Quito.</p>
														</div>
													</div>
													<div class="toggle toggle_default toggle_color_default">
														<div class="toggle_title">
															<h4>Que forma de pago aceptan?</h4>
															<i class="toggle_icon"></i>
														</div>
														<div class="toggle_content">
															<p>Aceptamos todo tipo de tarjetas de credito, transferencia bancaria o pago por PayPal.</p>
														</div>
													</div>
													<div class="toggle toggle_default toggle_color_default">
														<div class="toggle_title">
															<h4>¿Tienen una talla diferente?</h4>
															<i class="toggle_icon"></i>
														</div>
														<div class="toggle_content">
															<p>
																Solo disponenos los tamaños listados en la página del producto en stock.
															</p>
														</div>
													</div>
													<div class="toggle toggle_default toggle_color_default">
														<div class="toggle_title">
															<h4>¿Como cancelo un pedido?</h4>
															<i class="toggle_icon"></i>
														</div>
														<div class="toggle_content">
															<p>
																Escribanos lo mas rapido posible a
																<a href="mailto:email@domain.com">contacto@uawa.ec</a>. Una vez ingresado el producto a la empresa de transporte ya no podremos cancelar ni reembolsar el pedido.
															</p>
														</div>
													</div>
													<div class="toggle toggle_default toggle_color_default">
														<div class="toggle_title">
															<h4>Algo esta mal en mi pedido?</h4>
															<i class="toggle_icon"></i>
														</div>
														<div class="toggle_content">
															<p>
																Escribanos lo mas rapido posible a
																<a href="mailto:email@domain.com">contacto@uawa.ec</a>.
															</p>
														</div>
													</div>
													
												</div>
											</div>
											<div class="row inner faq-wrapper">
												<div class="col-sm-12">
													<div class="content_element title">
														<h2>Envíos</h2>
													</div>
													
													<div class="toggle toggle_default toggle_color_default">
														<div class="toggle_title">
															<h4>Algo esta mal en mi pedido?</h4>
															<i class="toggle_icon"></i>
														</div>
														<div class="toggle_content">
															<p>
																Escribanos lo mas rapido posible a
																<a href="mailto:email@domain.com">contacto@uawa.ec</a>.
															</p>
														</div>
													</div>
													
													
												</div>
											</div>
											<div class="row inner faq-wrapper">
												<div class="col-sm-12">
													<div class="content_element title">
														<h2>Devoluciones/Cambios</h2>
													</div>
													
													<div class="toggle toggle_default toggle_color_default">
														<div class="toggle_title">
															<h4>Algo esta mal en mi pedido?</h4>
															<i class="toggle_icon"></i>
														</div>
														<div class="toggle_content">
															<p>
																Escribanos lo mas rapido posible a
																<a href="mailto:email@domain.com">contacto@uawa.ec</a>.
															</p>
														</div>
													</div>
												</div>
											</div>
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