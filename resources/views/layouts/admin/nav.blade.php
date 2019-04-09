<nav class="navbar navbar-default  navbar-fixed-top" id="main_nav">
<div class="container-fluid"> 
<div class="row">

    <!-- LOGO -->
    <div class="col-md-2" id="logo_nav">
      <a href="{{ route('front.index') }}">
        <img src="{{ asset('images/logo_custom_blog.png')}}" alt="Responsive image">
      </a>
    </div><!-- /#logo_nav -->

    <!-- CONTENIDO -->
    <div class="col-md-10" id="content_nav">
      <!--OPCIONES-->
      <ul class="nav navbar-nav">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-user"></i> Usuarios</a></li>
        <li><a href="{{ route('admin.categories.index') }}"><i class="fa fa-list"></i> Categorias</a></li>
        <li><a href="{{ route('admin.tags.index') }}"><i class="fa fa-tag"></i> Etiquetas</a></li>
        <li><a href="{{ route('admin.articles.index') }}"><i class="fa fa-newspaper"></i> Articulos</a></li>
      </ul>
      <!--USUARIO-->
      <ul  class="nav navbar-nav" id="content_nav_user">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Kevin Cisnero <span class="caret"></span></a>  
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-cog"></i> Preferencias</a></li>
            <li><a href="{{ route('admin.auth.login') }}"><i class="fa fa-sign-out-alt"></i> Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /#content_nav -->

</div><!-- /.row -->
</div><!-- /.container-fluid -->
</nav><!-- /#main_nav -->