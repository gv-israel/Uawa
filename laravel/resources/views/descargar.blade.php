@extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Descargar')
@section('head')

@endsection
@section('contenido')
<div class="content-container">
				<div class="container">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content text-center text-uppercase">
								<div class="shop">
									<p class="cart-empty">¿Ya tienes tu camiseta?</p>
									<p>
									Es hora de <strong>descargar la aplicacion</strong> para comenzar con la experiencia <br>
									
									<img src="http://sionapp.net/wp-content/uploads/2016/03/57-layers.png">
									<div class="col-md-6 text-right">
										<a href="https://play.google.com/store/apps/details?id=com.Company.SionAR">
										<img src="http://conseguridad.org/v2/my-verisure/img/img-available-googleplay.png" width="38%">
										</a>
									</div>
									<div class="col-md-6 text-left">
										<a href="https://itunes.apple.com/es/app/sion-ar/id658764136?mt=8">
										<img src="https://www.bluejeans.com/sites/default/files/App_Store_Badge.svg" width="40%"></a>
									</div>
									<br>
</p>
								
									
								</div>
							</div>
						</div>
					</div>
				</div>
</div>
@endsection

@section('jquery')
<script type="text/javascript">
$(document).ready(function(){
	if(navigator.userAgent.toLowerCase().indexOf("android") > -1) {
	    if(confirm("¿Descargar aplicacion?")) {
	        window.location.href= "market://details?id=com.Company.SionAR";
	    }
	}

});
</script>
@endsection
