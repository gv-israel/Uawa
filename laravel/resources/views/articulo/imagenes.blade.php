<div class="single-product-images">

                          <div class="single-product-images-slider">
                            <div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1">
                              <div class="caroufredsel-wrap">
                                <ul class="caroufredsel-items">
                                  @foreach($imagenes as $imagen)
                                  <li class="caroufredsel-item">
                                    <div class="thumb">
                                      <a href="http://uawa/storage/articulo_miniatura/{{$imagen->imagen}}" data-rel="magnific-popup-verticalfit" title="Product-detail">
                                        <img width="800" height="850" src="http://uawa/storage/articulo_miniatura/{{$imagen->imagen}}" alt="Product-detail"/>
                                      </a>
                                    </div>
                                  </li>
                                  @endforeach
                                </ul>
                                <a href="#" class="caroufredsel-prev"></a>
                                <a href="#" class="caroufredsel-next"></a>
                              </div>
                            </div>
                          </div>
                          <div class="single-product-thumbnails">
                            <div class="caroufredsel product-thumbnails-slider" data-visible-min="2" data-visible-max="4" data-scrollduration="500" data-direction="up" data-height="100%" data-circular="1" data-responsive="0">
                              <div class="caroufredsel-wrap">
                                <ul class="single-product-images-slider-synchronise caroufredsel-items">
                                  <?php $i = 0; ?>
                                  @foreach($imagenes as $imagen)
                                  <?php 
                                  if($i=0){
                                    $selected = "selected";
                                  }
                                  else
                                  {
                                    $selected = "";
                                  }
                                  ?>
                                  <li class="caroufredsel-item {{$selected}}">
                                    <div class="thumb">
                                      <a href="#" data-rel="2" title="Product-detail">
                                        <img width="100" height="150" src="http://uawa/storage/articulo_miniatura/{{$imagen->imagen}}" alt="Product-detail"/>
                                      </a>
                                    </div>
                                  </li>
                                  <?php $i++; ?>
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>