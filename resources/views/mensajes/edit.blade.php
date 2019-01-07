@extends('layouts.layout')@section('contenido')    <h1>Responder mensaje</h1>    <div class="container col-md-offset-2 col-md-8" style="padding-top: 30px">        @if(session()->has('info'))            <h3>{{  session('info')  }}</h3>        @else            {{ Form::open(array('route'=> array('mensajes.update', $mensaje->id), 'method'=>'post', 'onsubmit'=>'return true;', "style" => "margin:0px;")) }}            {!!  method_field('PUT')  !!}            <div class="row">                <div class="col-md-4">                    <div class="form-group">                        <label for="nombre"><b>Nombre:</b></label>                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre..." value="{{  $mensaje->nombre  }}">                        {{  $errors->first('nombre', '<span class=error>:message</span>')  }}                    </div>                </div>                <div class="col-md-4">                    <div class="form-group">                        <label for="apellido"><b>Apellido:</b></label>                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido..." value="{{  $mensaje->apellido  }}">                        {{  $errors->first('apellido', '<span class=error>:message</span>')  }}                    </div>                </div>            </div>            <div class="row">                <div class="col-md-4">                    <div class="form-group">                        <label for="telefono"><b>Teléfono:</b></label>                        <input type="int" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su teléfono..." value="{{  $mensaje->telefono  }}">                    </div>                </div>                <div class="col-md-4">                    <div class="form-group">                        <label for="mail"><b>Mail:</b></label>                        <input type="mail" class="form-control" name="mail" id="id" placeholder="Ingrese su email..." value="{{  $mensaje->mail  }}">                        {{  $errors->first('mail', '<span class=error>:message</span>')  }}                    </div>                </div>            </div>            <div class="row">                <div class="col-md-8">                    <div class="form-group">                        <label for="mensaje"><b>Mensaje:</b></label>                        <textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control" placeholder="Deje su consulta aquí...">{{  $mensaje->mensaje  }}</textarea>                        {{  $errors->first('mensaje', '<span class=error>:message</span>')  }}                    </div>                </div>            </div>            <div class="row">                <div class="col-md-8 center" align="center">                    <div class="form-group">                        <button type="submit" class="btn btn-outline-primary">Enviar</button>                    </div>                </div>            </div>            {{ Form::close() }}        @endif    </div>@stop