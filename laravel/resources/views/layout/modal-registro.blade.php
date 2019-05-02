
<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">


            <form id="userregisterModalForm" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span> </button>
                    <h4 class="modal-title">Crear Cuenta</h4>
                </div>
                <div class="modal-body">
                    <div class="user-login-facebook">
                        <button class="btn-login-facebook" type="button"> <i class="fa fa-facebook"></i>Registrate con Facebook </button>
                    </div>
                    <div class="user-login-or"><span>o</span></div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Nombres</label>
                            <input id="nombres" type="text" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" value="{{ old('nombres') }}" required autofocus  placeholder="Nombres">

                                    @if ($errors->has('nombres'))
                                        <span class="invalid-feedback alert-danger" role="alert">
                                            <strong>{{ $errors->first('nombres') }}</strong>
                                        </span>
                                    @endif
                            
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Apellidos</label>
                            <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ old('apellidos') }}" required autofocus  placeholder="Apellidos">

                                    @if ($errors->has('apellidos'))
                                        <span class="invalid-feedback alert-danger" role="alert">
                                            <strong>{{ $errors->first('apellidos') }}</strong>
                                        </span>
                                    @endif
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="user_email">Correo Electronico</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email"> 

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="user_password">Contraseña</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="user_password">Repetir contraseña</label>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required placeholder="Retype password">

                        </div>
                        @if ($errors->has('password'))
                        <div class="form-group col-sm-12">
                                <span class="invalid-feedback alert-danger" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer"> <span class="user-login-modal-link pull-left"> <a data-rel="loginModal" href="#loginModal">¿Ya tiene cuenta?</a>  </span>
                    <button type="submit" class="btn btn-default btn-outline">Crear Cuenta</button>
                </div>
            </form>
        </div>
    </div>
</div>
