<!DOCTYPE html><html lang="es">    <head>        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">        {!! Html::style('/components/bootstrap/dist/css/bootstrap.css') !!}        {!! Html::script('/components/bootstrap/dist/js/bootstrap.min.js') !!}        {!! Html::style('/css/app.css') !!}        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />        <link rel="icon" href="/favicon.ico" type="image/x-icon">        <title>Biblioteca</title>    </head>    <body>        <header>            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">                <div class="col-md-4">                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">                        <a class="navbar-brand" href="{{  route('site.home')  }}">Biblioteca</a>                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">                            <li class="nav-item active">                                <a class="nav-link" href="{{  route('site.home')  }}">Sitio<span class="sr-only">(current)</span></a>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('mensajes.index')  }}">Mensajes</a>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('libros.index')  }}">Libros</a>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('autores.index')  }}">Autores</a>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('usuarios.index')  }}">Usuarios</a>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('socios.index')  }}">Socios</a>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('prestamos.index')  }}">Prestamos</a>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('eventos.index')  }}">Eventos</a>                            </li>                            <li class="nav-item">                                <a class="nav-link" href="{{  route('categorias.index')  }}">Categorias</a>                            </li>                        </ul>                    </div>                </div>                <div class="col-md-4">                    {{--<form class="form-inline my-2 my-lg-0">                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">                        <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>                    </form>--}}                </div>                <div class="col-md-4" align="right">                    {{ Form::open(array('route'=>'login', 'method'=>'get', 'onsubmit'=>'return true;', "style" => "margin:0px;")) }}                    <button class="btn btn-primary" type="submit">Cerrar Sesión</button>                    {{  Form::close()  }}                </div>            </nav>        </header>        @yield('contenido')        <footer class="footer-b">            <p class="copyright">Kevin Firmani - 2018 ® &copy;</p>        </footer>    </body></html>