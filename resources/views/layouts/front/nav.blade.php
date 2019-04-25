<nav class="navbar navbar-default navbar-fixed-top" id="main_nav">
  <div class="container-fluid"> 
  <div class="row">
    <!-- LOGO -->
    <div class="col-md-2" id="logo_nav">
      <a href="{{ route('front.index') }}">
        <img src="{{ asset('images/logo_custom_blog.png')}}" alt="Responsive image">
      </a>
    </div><!-- /#logo_nav -->

    <!-- BUSCADOR -->
    <div class="col-md-3" id="search_nav">
      {!! Form::open(['route' => 'front.search.article', 'method' => 'GET']) !!}
        <div class="input-group">
          <span class="input-group-addon" id="search_nav_btn">
            <span class="glyphicon  glyphicon-search"></span>
          </span>
          <?php $searchArticle = isset($_REQUEST['searchArticle']) ? $_REQUEST['searchArticle'] : NULL ; ?>
          <input type="text"  placeholder="Buscar articulo..." value="{{ $searchArticle }}" name="searchArticle" id="search_nav_input" aria-describedby="search_nav_btn">
        </div>
      {!! Form::close() !!}
    </div><!-- /#search_nav -->

    <!-- CONTENIDO -->
    <div class="col-md-7" id="content_nav">
      <!--OPCIONES-->
      <ul class="nav navbar-nav">
        <li><a href="{{ route('front.index') }}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#recientes"><i class="fa fa-calendar-times-o"></i> Recientes</a></li>
        <li><a href="#like"><i class="fa fa-star"></i> Mas Gustados</a></li>
      </ul>
      <!--USUARIO-->
      <ul  class="nav navbar-nav" id="content_nav_user">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list"></i> Menu<span class="caret"></span></a>  
          <ul class="dropdown-menu">
            @if(!Auth::user())
              <li><a href="{{ route('admin.index') }}"><i class="fa fa-sign-in-alt"></i> Iniciar Sesion</a></li>
              <li><a href="{{ route('admin.auth.register') }}"><i class="fa fa-user-plus"></i> Registrate</a></li>
            @else
              @if(Auth::user()->type == 'admin')
                <li><a href="#" ><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('admin.index') }}"><i class="fa fa-sign-in-alt"></i> Panel Admin</a></li>
              @endif
              <li><a href="{{ route('admin.auth.logout') }}"><i class="fa fa-sign-out-alt"></i> Salir</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div><!-- /#content_nav -->
  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</nav><!-- /#main_nav -->

