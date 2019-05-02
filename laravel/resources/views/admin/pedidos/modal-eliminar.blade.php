<div class="modal fade" id="modal-eliminar-{{$pedido->id}}" tabindex="-1" role="dialog" aria-hidden="true">
	{{Form::Open(array('action'=>array('PedidoController@destroy', $pedido->id), 'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span> </button>
                    <h4 class="modal-title">Cancelar Pedido</h4>
                </div>
                <div class="modal-body">
                    <p>¿Esta seguro que desea cancelar el pedido?</p>
                </div>
                <div class="modal-footer">
                    	<button type="button" class="btn btn-default" data-dismiss="modal">Volver Atras</button>
						<button type="submit" class="btn btn-primary">Cancelar</button>
                </div>
            
        </div>
    </div>
    {{Form::Close()}}	
</div>