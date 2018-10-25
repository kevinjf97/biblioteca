@extends('layouts.layoutAdmin')@section('contenido')    <div class="container">        <h1>Editar Usuario</h1>        @if(session()->has('info'))            <h3>{{  session('info')  }}</h3>        @else            {{  Form::open( array(                'route'=>array('usuarios.update', $usuario->id),                'method'=>'post',                'onsubmit'=>'return true;',                "style" => "margin:0px;"                ))            }}            {!!  method_field('PUT')  !!}            <div class="row">                <div class="col-md-4">                    <div class="form-group">                        <label for="name"><b>Nombre:</b></label>                        <input type="text" name="name" id="name" class="form-control" placeholder="Ingresar el/los nombre/s..." value="{{  $usuario->name  }}">                        {!!  $errors->first('name', '<span class="errors">:message</span>')  !!}                    </div>                </div>            </div>            <div class="row">                <div class="col-md-8">                    <div class="form group">                        <label for="email"><b>Correo electrónico:</b></label>                        <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo@mail.com" value="{{  $usuario->email  }}">                        {!!  $errors->first('email', '<span class="errors">:message</span>')  !!}                    </div>                </div>            </div>            <div class="row">                <div class="col-md-4">                    <div class="form-group">                        <label for="password"><b>Clave: </b></label>                        <input type="password" name="password" id="password" class="form-control" placeholder="Ingresar la clave..." value="{{  old('password')  }}">                        {!!  $errors->first('password', '<span class="errors">:message</span>')  !!}                    </div>                </div>                <div class="col-md-4">                    <div class="form-group">                        <label for="password_confirmation"><b>Confirmar Clave: </b></label>                        <input type="password" name="password_confirmation" class="form-control" placeholder="Reingresar la clave..." value="{{  old('password_confirmation')  }}">                        {!!  $errors->first('password_confirmation', '<span class="errors">:message</span>')  !!}                    </div>                </div>            </div>            <button type="submit" class="btn btn-warning">Modificar</button>            {{  Form::close()  }}        @endif    </div>@stop