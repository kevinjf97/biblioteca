<!DOCTYPE html><html lang="es">    <head>        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">        {!! Html::script('/components/jquery/jquery.min.js') !!}        {!! Html::style('../node_modules/bootstrap/dist/css/bootstrap.css') !!}        {!! Html::script('../node_modules/bootstrap/dist/js/bootstrap.min.js') !!}        {!! Html::style('../vendor/select2/dist/css/select2.min.css') !!}        {!! Html::script('../vendor/select2/dist/js/select2.min.js') !!}        {!! Html::style('/css/app.css') !!}        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />        <link rel="icon" href="/favicon.ico" type="image/x-icon">        <title>Biblioteca</title>    </head>    <body>        <header>            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">                <div class="col-md-12">                    <div class="collapse navbar-collapse" id="navbar">                        <a class="navbar-brand" href="{{  route('admin')  }}">Biblioteca - Administración</a>                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">                            <li class="nav-item active">                                <a class="nav-link" href="{{  route('site.home')  }}">Sitio<span class="sr-only">(current)</span></a>                            </li>                            <li class="nav-item dropdown">                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Autores</a>                                <div class="dropdown-menu">                                    <a class="dropdown-item" href="{{  route('autores.index')  }}">Listado</a>                                    <a class="dropdown-item" href="{{  route('grupos_autores.index')  }}">Categorías</a>                                    <div class="dropdown-divider"></div>                                    <a class="dropdown-item" href="{{  route('grupos_autores.create')  }}">Nueva Categoría</a>                                </div>                            </li>                            <li class="nav-item dropdown">                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Eventos</a>                                <div class="dropdown-menu">                                    <a class="dropdown-item" href="{{  route('eventos.index')  }}">Listado</a>                                    <a class="dropdown-item" href="{{  route('grupos_eventos.index')  }}">Categorías</a>                                    <div class="dropdown-divider"></div>                                    <a class="dropdown-item" href="{{  route('grupos_eventos.create')  }}">Nueva Categoría</a>                                </div>                            </li>                            <li class="nav-item dropdown">                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Libros</a>                                <div class="dropdown-menu">                                    <a class="dropdown-item" href="{{  route('libros.index')  }}">Listado</a>                                    <a class="dropdown-item" href="{{  route('grupos_libros.index')  }}">Categorías</a>                                    <div class="dropdown-divider"></div>                                    <a class="dropdown-item" href="{{  route('grupos_libros.create')  }}">Nueva Categoría</a>                                </div>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('mensajes.index')  }}">Mensajes</a>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('prestamos.index')  }}">Prestamos</a>                            </li>                            <li class="nav-item dropdown">                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Talleres</a>                                <div class="dropdown-menu">                                    <a class="dropdown-item" href="{{  route('talleres.index')  }}">Listado</a>                                    <a class="dropdown-item" href="{{  route('grupos_talleres.index')  }}">Categorías</a>                                    <div class="dropdown-divider"></div>                                    <a class="dropdown-item" href="{{  route('grupos_talleres.create')  }}">Nueva Categoría</a>                                </div>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('usuarios.index')  }}">Usuarios</a>                            </li>                            <li class="nav-item dropdown">                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Usuario</a>                                <div class="dropdown-menu px-8 py-3">                                    {{ Form::open(array('route'=>'logout', 'method'=>'post', 'onsubmit'=>'return true;', "style" => "margin:0px;")) }}                                        <button class="btn btn-primary" type="submit">Cerrar Sesión</button>                                    {{  Form::close()  }}                                </div>                            </li>                        </ul>                    </div>                </div>            </nav>        </header>        <div align="center">            @yield('contenido')        </div>        <footer class="footer-b">            <p class="copyright">Kevin Firmani - 2018 ® &copy;</p>        </footer>    </body></html>