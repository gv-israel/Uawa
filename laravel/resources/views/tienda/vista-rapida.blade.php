<div class="modal fade shop product-quickview" tabindex="-1" role="dialog" aria-hidden="true" id="vista-rapida-{{$art->id}}">
			<div class="modal-dialog modal-lg">
		    	<div class="modal-content">
		    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		    		<div class="modal-body">
		    			<div class="product-quickview-content">
							<div class="row">
								<div class="col-sm-6">
									<div class="single-product-images">
										<div class="single-product-images-slider">
											<img width="800" height="850" src="images/product/product-detail/product-1.jpg" alt="Product-1">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="summary entry-summary">
										@include('tienda.detalles-articulo', ['art' => $art])
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>