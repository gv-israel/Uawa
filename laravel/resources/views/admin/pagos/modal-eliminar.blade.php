<div class="modal fade" id="modal-eliminar-{{$pago->id}}" tabindex="-1" role="dialog" aria-hidden="true">
	{{Form::Open(array('action'=>array('PagoController@destroy', $pago->id), 'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="userlostpasswordModalForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span> </button>
                    <h4 class="modal-title">Eliminar Pago {{$pago->id}}</h4>
                </div>
                <div class="modal-body">
                    <p>¿Esta seguro que desea eliminar el pago?</p>
                </div>
                <div class="modal-footer">
                    	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
    {{Form::Close()}}	
</div>