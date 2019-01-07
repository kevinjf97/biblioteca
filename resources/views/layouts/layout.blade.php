<!DOCTYPE html><html lang="es">    <head>        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">        {!! Html::script('/components/jquery/jquery.min.js') !!}        {!! Html::style('../node_modules/bootstrap/dist/css/bootstrap.css') !!}        {!! Html::script('../node_modules/bootstrap/dist/js/bootstrap.min.js') !!}        {!! Html::style('../vendor/select2/dist/css/select2.min.css') !!}        {!! Html::script('../vendor/select2/dist/js/select2.min.js') !!}        {!! Html::style('/css/app.css') !!}        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />        <link rel="icon" href="/favicon.ico" type="image/x-icon">        <title>Biblioteca</title>    </head>    <body>        <header>            <?php                function activeMenu($url){                    return request()->is($url) ? 'active' : '';                }            ?>            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">                <div class="col-md-6">                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">                        <a class="navbar-brand" href="{{  route('site.home')  }}">Biblioteca</a>                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">                            <li class="nav-item">                                <a href="{{  route('site.home')  }}" class="{{  activeMenu('site')  }} nav-link" >Inicio<span class="sr-only">(current)</span></a>                            </li>                            <li class="nav-item">                                <a href="{{  route('site.libros')  }}" class="{{  activeMenu('site/libros')  }} nav-link">Libros</a>                            </li>                            <li class="nav-item">                                <a href="{{  route('site.autores')  }}" class="{{  activeMenu('site/autores')  }} nav-link">Autores</a>                            </li>                            <li class="nav-item">                                <a href="{{  route('site.eventos')  }}" class="{{  activeMenu('site/eventos')  }} nav-link">Eventos</a>                            </li>                            <li class="nav-item">                                <a href="{{  route('site.historia')  }}" class="{{  activeMenu('site/historia')  }} nav-link">Historia</a>                            </li>                            <li class="nav-item">                                <a href="{{  route('site.contacto')  }}" class="{{  activeMenu('site/contacto')  }} nav-link" >Contacto</a>                            </li>                            @if(auth()->guest())                                <li class="nav-item">                                    <a href="{{  route('site.login')  }}" class="{{  activeMenu('site/login')  }} nav-link" >Ingresar</a>                                </li>                            @else                                <li class="nav-item dropdown">                                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{  auth()->user()->name  }}</a>                                    <ul class="dropdown-menu">                                        <li>                                            @if(auth()->user()->admin == 'true')                                                <a href="{{  route('admin')  }}" class="btn btn-link">Administración</a>                                                <hr>                                            @endif                                            <a href="{{  route('site.usuario', Auth::user()->id)  }}" class="dropdown-item" >Perfil</a>                                            <a href="{{  route('site.usuario.edit', Auth::user()->id)  }}" class="dropdown-item" >Editar datos personales</a>                                        </li>                                        <li>                                            <hr>                                            {{ Form::open(array('route'=>'logout', 'method'=>'post', 'onsubmit'=>'return true;', "style" => "margin:0px;")) }}                                                <button type="submit" class="btn btn-link">Cerrar sesión</button>                                            {{  Form::close()  }}                                        </li>                                    </ul>                                </li>                            @endif                        </ul>                    </div>                </div>            </nav>        </header>        <div align="center">            @yield('contenido')        </div>        <footer class="footer-b">            <p class="copyright">Kevin Firmani - 2018 ® &copy;</p>        </footer>    </body></html>