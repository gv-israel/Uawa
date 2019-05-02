
                          <h1 class="product_title entry-title">{{$art->nombre}}</h1>
                          <div class="shop-product-rating">
                            <div class="star-rating">
                              <span style="width:80%"></span>
                            </div>
                            <a href="#reviews" class="shop-review-link">(<span class="count">1</span> opinion de cliente)</a>
                          </div>
                          <p class="price">
                            <span class="amount">&#36;12.00</span>&ndash;
                            <span class="amount">&#36;{{$art->pvp}}</span>
                          </p>
                          <div class="product-excerpt">
                            <p>
                              {{$art->descripcion}}
                            </p>
                          </div>
                          <div class="product-actions res-color-attr">
                            <form class="cart">
                              <div class="product-options-outer">
                                <div class="variation_form_section">
                                  <div class="product-options icons-lg">
                                    <table class="variations-table">
                                      <tbody>
                                        <tr>
                                          <td><label>Color</label></td>
                                          <td>
                                            {//{$art->color}}
                                            <div class="select-option swatch-wrapper">
                                              <a href="#" title="Verde" class="swatch-color green">Verde</a>
                                            </div>
                                            <div class="select-option swatch-wrapper selected">
                                              <a href="#" title="Rojo" class="swatch-color red">Rojo</a>
                                            </div>
                                            <div class="select-option swatch-wrapper">
                                              <a href="#" title="Blanco" class="swatch-color white">Blanco</a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><label>Tamaño</label></td>
                                          <td>
                                            <div class="select-option swatch-wrapper selected">
                                              <a href="#" title="Extra Grande" class="swatch-anchor">
                                                <img src="{{asset('imagenes/tamanos/XL.jpg')}}" alt="thumbnail" width="35" height="35"/>
                                              </a>
                                            </div>
                                            <div class="select-option swatch-wrapper">
                                              <a href="#" title="Extra Extra Grande" class="swatch-anchor">
                                                <img src="{{asset('imagenes/tamanos/XXL.jpg')}}" alt="thumbnail" width="35" height="35"/>
                                              </a>
                                            </div>
                                            <div class="select-option swatch-wrapper">
                                              <a href="#" title="Mediana" class="swatch-anchor">
                                                <img src="{{asset('imagenes/tamanos/M.jpg')}}" alt="thumbnail" width="35" height="35"/>
                                              </a>
                                            </div>
                                            <div class="select-option swatch-wrapper">
                                              <a href="#" title="Pequeña" class="swatch-anchor">
                                                <img src="{{asset('imagenes/tamanos/S.jpg')}}" alt="thumbnail" width="35" height="35"/>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="single_variation_wrap">
                                <div class="single_variation">
                                  <span class="price"><span class="amount">${{$art->pvp}}</span></span>
                                </div>
                                <div class="variations_button">
                                  <div class="quantity">
                                    <input type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                  </div>
                                  
                                  <a href="{{route('carrito-agregar',$art->slug)}}">
                                    <button type="button" class="button">Añadir al carrito</button>
                                  </a>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="yith-wcwl-add-to-wishlist">
                            <a href="#" class="add_to_wishlist">
                              Añadir a Lista de Deseos
                            </a>
                          </div>
                          <div class="product_meta">
                            
                            <span class="posted_in">Categoria: <a href="#">Camisetas</a></span>
                            <span class="tagged_as">Etiquetas: <a href="#">Hombre</a>, <a href="#">Mujer</a></span>
                          
                          </div>
                          <div class="share-links">
                            <div class="share-icons">
                              <span class="facebook-share">
                                <a href="#" title="Compartir en Facebook"><i class="fa fa-facebook"></i></a>
                              </span>
                              <span class="twitter-share">
                                <a href="#" title="Compartir en Twitter"><i class="fa fa-twitter"></i></a>
                              </span>
                              <span class="google-plus-share">
                                <a href="#" title="Compartir en Google +"><i class="fa fa-google-plus"></i></a>
                              </span>
                              <span class="linkedin-share">
                                <a href="#" title="Compartir en Linked In"><i class="fa fa-linkedin"></i></a>
                              </span>
                            </div>
                          </div>
                        