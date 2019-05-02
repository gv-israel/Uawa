<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span> </button>
          <h4 class="modal-title">Iniciar sesión</h4>
        </div>
        <div class="modal-body">
          <div class="user-login-facebook">
            <a href="{{route('social-login', 'facebook') }}"><button class="btn-login-facebook" type="button"> <i class="fa fa-facebook"></i>Iniciar sesión con Facebook </button></a>
          </div>
          <div class="user-login-or"><span>o</span></div>
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




            <span class="lostpassword-modal-link pull-right"> <a href="#lostpasswordModal" data-rel="lostpasswordModal">¿Olvidó su contraseña?</a> </span> </div>
        </div>
        <div class="modal-footer"> <span class="user-login-modal-register pull-left"> <a data-rel="registerModal" href="#">¿Aun no tiene cuenta?</a> </span>


          <button type="submit" class="btn btn-default btn-outline">{{ __('Login') }}</button>
        </div>
      </form>
    </div>
  </div>
</div>