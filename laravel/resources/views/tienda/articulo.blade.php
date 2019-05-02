                  <li class="product">
                  <div class="product-container">
                      <figure>
                          <div class="product-wrap">
                              <div class="product-images">
                                  <span class="onsale">OFERTA</span>
                                  <div class="shop-loop-thumbnail">
                                    <?php
                                                    //CONSULTA IMAGEN DESTACADA
                                                    $img = DB::table('articulos_imagenes')
                                                    ->select(DB::raw('MAX(destacado) as destacado'))
                                                    ->select('imagen')
                                                    ->where('deArticulo','=',$art->id)
                                                    ->where('destacado','=',1)
                                                    ->pluck('imagen')
                                                    ->first();
                                                  
                                                ?>
                                                @if($img)
                                                  <img src="http://uawa/storage/articulo_miniatura/{{$img}}" width="300" height="350" style="height: 350px;">
                                                @else
                                                  <img src="http://uawa/imagenes/default.png" width="300" height="350" style="height: 350px;">
                                                @endif
                                  </div>
                                  <div class="yith-wcwl-add-to-wishlist">
                                      <div class="yith-wcwl-add-button">
                                          <a href="#" class="add_to_wishlist">Añadir a Lista de Deseos</a>
                                      </div>
                                  </div>
                                  <div class="clear"></div>
                                  <div class="shop-loop-quickview">
                                      <a href="#" data-toggle="modal" data-target="#vista-rapida-{{$art->id}}"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <figcaption>
                              <div class="shop-loop-product-info">
                                  <div class="info-title">
                                      <h3 class="product_title"><a href="{{route('ver-articulo', $art->slug)}}">{{$art->nombre}}</a></h3>
                                  </div>
                                  <div class="info-meta">
                                      <div class="info-price">
                                          <span class="price">
                                                  <del><span class="amount">&#36;{{$art->pvp}}</span></del> <ins><span class="amount">&#36;19.00</span></ins>
                                          </span>
                                      </div>
                                      <div class="loop-add-to-cart">
                                          <a href="{{route('carrito-agregar',$art->slug)}}">Añadir al carrito</a>
                                      </div>
                                  </div>
                                  <div class="info-excerpt">{{$art->descripcion}}&hellip;</div>
                                  <div class="list-info-meta clearfix">
                                      <div class="info-price">
                                          <span class="price">
                                                  <del><span class="amount">&#36;{{$art->pvp}}</span></del> <ins><span class="amount">&#36;19.00</span></ins>
                                          </span>
                                      </div>
                                      <div class="list-action clearfix">
                                          <div class="loop-add-to-cart">
                                              <a href="{{route('carrito-agregar',$art->slug)}}">Añadir al carrito</a>
                                          </div>
                                          <div class="yith-wcwl-add-to-wishlist">
                                              <div class="yith-wcwl-add-button">
                                                  <a href="#" class="add_to_wishlist">
                                                      Añadir a Lista de Deseos
                                                    </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </figcaption>
                      </figure>
                  </div>
                  @include('tienda.vista-rapida')
                  </li>