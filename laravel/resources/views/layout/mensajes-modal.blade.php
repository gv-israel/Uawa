@if(\Session::has('mostrarMensaje'))
<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="mostrarMensaje">
  <div class="modal-dialog modal-sm @if(session('mostrarMensaje.tipoMensaje')) {{session('mostrarMensaje.tipoMensaje')}} @endif">
    <div class="modal-content">
    	<div class="modal-body text-center">
      

      {{ session('mostrarMensaje.mensaje') }}
    	</div>
    </div>
  </div>
</div>

<script>
$(document).ready(function()
{
  // id de nuestro modal
  $("#mostrarMensaje").modal("show");
});
</script>
@endif

@if(Cookie::get('mostrarIniciarSesion'))
<script>
$(document).ready(function()
{
	$("#userloginModal").modal("show");
	$("#userregisterModal").modal("hide");
});
</script>
@endif

@if(Cookie::get('mostrarRegistro'))
<script>
$(document).ready(function(e)
{
	
	$("#userregisterModal").modal("show");
	
	$("#userloginModal").modal("hide");
	e.preventDefault();
});
</script>
@endif

@if(count($errors)>0)
<div class="modal fade alert-danger" tabindex="-1" role="dialog" aria-hidden="true" id="mostrarErrores">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    	<div class="modal-body text-center">
          	<ul>
			    @foreach ($errors->all() as $error)
			       <li>{{$error}}</li>
			    @endforeach
		    </ul>
    	</div>
    </div>
  </div>
</div>

<script>
$(document).ready(function()
{
  // id de nuestro modal
	$("#mostrarErrores").modal("show");
	$("#userloginModal").modal("show");

  
});
</script>
@endif

