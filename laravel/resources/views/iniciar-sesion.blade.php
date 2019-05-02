 @extends('layout.app', ['contentPadding'=>'','tipoHeader'=>'clasico'])
@section('titulo', 'Iniciar sesión')
@section('head')
			<div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="{{url('/')}}" class="home"><span>Inicio</span></a></span></li>
							<li><span>Iniciar sesión</span></li>
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
					<div class="shop">
						

									<h2 class="shop-account-heading">Iniciar sesión</h2>
									<div class="user-login-facebook">
										<button class="btn-login-facebook" type="button">
											<i class="fa fa-facebook"></i>Iniciar sesión con Facebook
										</button>
									</div>
									<div class="user-login-or"><span>o</span></div>
									<form method="POST" action="{{ route('login') }}">
        							@csrf
										<div class="form-group">
							            <label>{{ __('E-Mail Address') }}</label>
							            <input  type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
							          </div>
							          <div class="form-group">
							            <label for="password">{{ __('Password') }}</label>
							            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
							          </div>
							          <div class="checkbox clearfix">
							            <div class="form-flat-checkbox pull-left">
							              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							              <i></i>&nbsp;{{ __('Remember Me') }}
							            </div>
											<br><br>
											<input type="submit" class="button" name="login" value="Login"/>
										</p>
										<p class="lost_password">
											<a href="#">¿Olvidó su contraseña?</a>
										</p>
									</form>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
