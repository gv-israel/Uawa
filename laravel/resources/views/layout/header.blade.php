  @if(@isset($tipoHeader))
      <header class="header-type-classic">
  @else
      <header class="header-type-classic header-absolute header-transparent">
  @endif
    <div class="topbar">
        <div class="container topbar-wap">
            <div class="row">
                <div class="col-sm-6">
                    <div class="left-topbar">
                        <div class="topbar-social">
                            <a href="#" title="Facebook" target="_blank"> <i class="fa fa-facebook facebook-bg-hover"></i> </a>
                            <a href="#" title="Twitter" target="_blank"> <i class="fa fa-twitter twitter-bg-hover"></i> </a>
                            <a href="#" title="Google+" target="_blank"> <i class="fa fa-google-plus google-plus-bg-hover"></i> </a>
                            <a href="#" title="Pinterest" target="_blank"> <i class="fa fa-pinterest pinterest-bg-hover"></i> </a>
                            <a href="#" title="RSS" target="_blank"> <i class="fa fa-rss rss-bg-hover"></i> </a>
                            <a href="#" title="Instagram" target="_blank"> <i class="fa fa-instagram instagram-bg-hover"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-topbar">
                        <div class="user-login">
                            <ul class="nav top-nav">
                                @guest
                                <li class="menu-item"> <a href="#" data-rel="loginModal"><i class="fa fa-user"></i> Iniciar sesión</a> </li>
                                @endguest

                                @auth
                                @foreach(menu('usuario') as $seccion => $url)
                                            @if(!is_array($url))
                                                <li><a href="{{$url}}">{{$seccion}}</a></li>
                                            @else
                                                <li class="menu-item-has-children dropdown">
                                                    <a href="#" class="dropdown-hover">
                                                        @if(Auth::user()->avatar)
                                                            <img src="{{Auth::user()->avatar}}" width="20" height="20" style="border-radius: 15px;">
                                                        @else
                                                            <img src="{{asset('imagenes/avatar.png')}}" width="20" height="20" style="border-radius: 15px;">
                                                        @endif
                                                         <span class="underline">{{$seccion}}</span> <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        @foreach($url as $subSeccion => $subUrl)
                                                            <li><a href="{{$subUrl}}">{{$subSeccion}}</a></li>
                                                        @endforeach
                                                    </ul>
                                            
                                                </li>
                                            @endif
                                            
                                @endforeach
                                @endauth
                                



                            </ul>
                        </div>                     
                        <div class="user-wishlist"> <a href="{{url('lista-deseos')}}"><i class="fa fa-heart-o"></i> Lista de deseos</a> </div>
                        
                        <div class="language-switcher">
                            <div class="wpml-languages">
                                <a class="active" href="#" data-toggle="dropdown"> <img src="{{asset('images/es.png')}}" alt="Castellano" /> ES </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-container">
        <div class="navbar navbar-default  navbar-scroll-fixed">
            <div class="navbar-default-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 navbar-default-col">
                            <div class="navbar-wrap">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle"> <span class="sr-only">>Navegacion</span> <span class="icon-bar bar-top"></span> <span class="icon-bar bar-middle"></span> <span class="icon-bar bar-bottom"></span> </button>
                                    <a class="navbar-search-button search-icon-mobile" href="#"> <i class="fa fa-search"></i> </a>
                                    <a class="cart-icon-mobile" href="{{route('carrito-ver')}}"> <i class="elegant_icon_bag"></i><span>{{carrito_numArticulos()}}</span> </a>
                                    <a class="navbar-brand" href="./">
                                        @if(@isset($tipoHeader))
                                            <img class="logo" alt="Uawa" src="{{asset('images/logo.png')}}">
                                        @else
                                            <img class="logo" alt="Uawa" src="{{asset('images/logo-blanco.png')}}">
                                        @endif
                                      
                                      <img class="logo-fixed" alt="Uawa" src="{{asset('images/logo-fijo.png')}}">
                                      <img class="logo-mobile" alt="Uawa" src="{{asset('images/logo-mobile.png')}}">
                                    </a>
                                </div>
                                <nav class="collapse navbar-collapse primary-navbar-collapse">
                                    <ul class="nav navbar-nav primary-nav">

                                        @foreach(menu('invitado') as $seccion => $url)
                                            @if(!is_array($url))
                                                <li><a href="{{$url}}"><span class="underline">{{$seccion}}</span></a></li>
                                            @else
                                                <li class="menu-item-has-children dropdown">
                                                    <a href="#" class="dropdown-hover"> <span class="underline">{{$seccion}}</span> <span class="caret"></span> </a>
                                                    <ul class="dropdown-menu">
                                                        @foreach($url as $subSeccion => $subUrl)
                                                            <li><a href="{{$subUrl}}">{{$subSeccion}}</a></li>
                                                        @endforeach
                                                    </ul>
                                            
                                                </li>
                                            @endif
                                            
                                        @endforeach
                                        @auth
                                        @if(Auth::user()->tipoUsuario=="admin")
                                            @foreach(menu('admin') as $seccion => $url)
                                                @if(!is_array($url))
                                                    <li><a href="{{$url}}"><span class="underline">{{$seccion}}</span></a></li>
                                                @else
                                                    <li class="menu-item-has-children dropdown">
                                                        <a href="#" class="dropdown-hover"> <span class="underline">{{$seccion}}</span> <span class="caret"></span> </a>
                                                        <ul class="dropdown-menu">
                                                            @foreach($url as $subSeccion => $subUrl)
                                                                <li><a href="{{$subUrl}}">{{$subSeccion}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                
                                                    </li>
                                                @endif
                                                
                                            @endforeach
                                        @endif
                                        @endauth

                                        <li class="navbar-search">
                                            <a class="navbar-search-button" href="#"> <i class="fa fa-search"></i> </a>
                                        </li>
                                        <li class="navbar-minicart navbar-minicart-nav">
                                            <a class="minicart-link" href="{{ url('carrito') }}"> <span class="minicart-icon"> <i class="minicart-icon-svg elegant_icon_bag"></i> <span>{{carrito_numArticulos()}}</span> </span>
                                            </a>
                                            @include('carrito.mini-carrito')
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-search-overlay hide">
                <div class="container">
                    <div class="header-search-overlay-wrap">
                        <form class="searchform">
                            <input type="search" class="searchinput" name="s" value="" placeholder="Buscar..." />
                            <input type="submit" class="searchsubmit hidden" name="submit" value="Buscar" />
                        </form>
                        <button type="button" class="close"> <span aria-hidden="true" class="fa fa-times"></span> <span class="sr-only">Cerrar</span> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>