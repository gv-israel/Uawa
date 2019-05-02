<div class="modal fade" id="modal-eliminar-{{$art->id}}" tabindex="-1" role="dialog" aria-hidden="true">
	{{Form::Open(array('action'=>array('ArticuloController@destroy', $art->id), 'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span> </button>
                    <h4 class="modal-title">Eliminar Articulo</h4>
                </div>
                <div class="modal-body">
                    <p>¿Esta seguro que desea eliminar el articulo?</p>
                </div>
                <div class="modal-footer">
                    	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            
        </div>
    </div>
    {{Form::Close()}}	
</div>