@extends('layouts.layoutAdmin')@section('contenido')    <div class="container">        <h1>Nuevo Usuario</h1>        {{  Form::open( array(            'route'=>'usuarios.store',            'method'=>'post',            'onsubmit'=>'return true;',            "style" => "margin:0px;"            ))        }}        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="nombre"><b>Nombre:</b></label>                    <input type="text" name="nombre" class="form-control" placeholder="Ingresar el/los nombre/s..." value="{{  old('nombre')  }}">                    {!!  $errors->first('nombre', '<span class="errors">:message</span>')  !!}                </div>            </div>            <div class="col-md-4">                <div class="form-group">                    <label for="apellido"><b>Apellido:</b></label>                    <input type="text" name="apellido" class="form-control" placeholder="Ingresar el/los apellido/s..." value="{{  old('apellido')  }}">                    {!!  $errors->first('apellido', '<span class="errors">:message</span>')  !!}                </div>            </div>        </div>        <div class="row">            <div class="col-md-4">                <div class="form group">                    <label for="mail"><b>Correo electrónico:</b></label>                    <input type="email" name="mail" class="form-control" placeholder="ejemplo@mail.com" value="{{  old('mail')  }}">                    {!!  $errors->first('mail', '<span class="errors">:message</span>')  !!}                </div>            </div>            <div class="col-md-4">                <div class="form group">                    <label for="usuario"><b>Usuario: </b></label>                    <input type="text" name="usuario" class="form-control" placeholder="Ingresar el usuario..." value="{{  old('usuario')  }}">                    {!!  $errors->first('usuario', '<span class="errors">:message</span>')  !!}                </div>            </div>        </div>        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="password"><b>Clave: </b></label>                    <input type="password" name="password" class="form-control" placeholder="Ingresar la clave..." value="{{  old('password')  }}">                    {!!  $errors->first('password', '<span class="errors">:message</span>')  !!}                </div>            </div>            <div class="col-md-4">                <div class="form-group">                    <label for="password_confirmation"><b>Confirmar Clave: </b></label>                    <input type="password" name="password_confirmation" class="form-control" placeholder="Reingresar la clave..." value="{{  old('password_confirmation')  }}">                    {!!  $errors->first('password_confirmation', '<span class="errors">:message</span>')  !!}                </div>            </div>        </div>        <div class="row">            <div class="col-md-8">                <div class="form-group">                    <label for="tipo_usuario"><b>Tipo usuario: </b></label>                    <select name="tipo_usuario" id="tipo_usuario" class="form-control">                        <option value="default">Seleccione un tipo...</option>                        <option value="admin">Administrador</option>                        <option value="mod">Moderador</option>                    </select>                </div>            </div>        </div>        <button type="submit" class="btn btn-primary">Guardar</button>        {{  Form::close()  }}    </div>@stop