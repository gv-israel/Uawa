{!! Form::open(array('url'=>'admin/articulos','method'=>'GET','autocomplete'=>'off','role'=>'buscar', 'class'=>'form-inline')) !!}
<div class="form-group pull-left col-md-6">
	<div class="input-group">
		<input type="text" name="buscar" class="form-control" placeholder="Buscar..." value="{{$textoBusqueda}}">
		<!-- <span class="input-group-addon"><button type="submit" class="btn btn-default">Buscar</button></span>
-->		
		
	</div>
</div>
{{Form::close()}}