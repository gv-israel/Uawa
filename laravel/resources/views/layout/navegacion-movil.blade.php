<div class="offcanvas open">
  <div class="offcanvas-wrap">
    <div class="offcanvas-user clearfix"> <a class="offcanvas-user-wishlist-link" href="{{url('lista-deseos')}}"> <i class="fa fa-heart-o"></i> Lista de deseos </a> <a class="offcanvas-user-account-link" href="{{url('iniciar-sesion')}}"> <i class="fa fa-user"></i> Iniciar sesión </a> </div>
    <nav class="offcanvas-navbar">
      <ul class="offcanvas-nav">

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
      </ul>
    </nav>
    <div class="offcanvas-widget">
      <div class="widget social-widget">
        <div class="social-widget-wrap social-widget-none"> <a href="#" title="Facebook" target="_blank"> <i class="fa fa-facebook"></i> </a> <a href="#" title="Twitter" target="_blank"> <i class="fa fa-twitter"></i> </a> <a href="#" title="Google+" target="_blank"> <i class="fa fa-google-plus"></i> </a> <a href="#" title="Pinterest" target="_blank"> <i class="fa fa-pinterest"></i> </a> </div>
      </div>
    </div>
  </div>
</div>