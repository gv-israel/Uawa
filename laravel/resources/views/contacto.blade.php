@extends('layout.app')
@section('titulo', 'Contacto')
@section('head')
<div class="heading-container heading-resize heading-no-button">
				<div class="heading-background heading-parallax" style="background-image: url('imagenes/fondos/contacto.png')">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-wrap">
									<div class="page-title">
										<h1>Contáctenos</h1>
										<div class="page-breadcrumb">
											<ul class="breadcrumb">
												<li><span><a class="home" href="#"><span>Inicio</span></a></span></li>
												<li><span>Contáctenos</span></li>
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
<div class="content-container">
				<div class="container-full">
					<div class="row">
<div class="col-md-12 main-wrap">
							<div class="main-content">
								<div class="container">
									<div class="row">
										<div class="col-sm-8">
											<div class="row contact-form-wrapper">
												<div class="col-sm-12">
													<div class="title">
														<h2 class="text-uppercase">Contáctenos</h2>
													</div>
													<form>
														<div class="row">
															<div class="col-sm-6">
																<div>Nombre (requerido)<br />
															    	<p class="form-control-wrap your-name">
															    		<input type="text" name="nombre" value="" size="40" class="form-control text validates-as-required" />
															    	</p>
															    </div>
															</div>
															<div class="col-sm-6">
																<div>Correo Electronico (requerido)<br />
														    		<p class="form-control-wrap your-email">
														    			<input type="email" name="email" value="" size="40" class="form-control text email validates-as-required validates-as-email" />
														    		</p>
														    	</div>
															</div>
															<div class="col-sm-12">
																<div>Mensaje<br />
														    		<p class="form-control-wrap your-message">	<textarea name="mensaje" cols="40" rows	="10" class="form-control textarea"></textarea>
														    		</p>
														    	</div>
															</div>
														</div>
														<input type="submit" value="Enviar" class="form-control submit" />
													</form>
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
			</div>
@endsection