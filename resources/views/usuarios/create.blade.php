@extends('layouts.layoutAdmin')@section('contenido')    <div class="container">        <h1>Nuevo Usuario</h1>            'route'=>'usuarios.store',            'method'=>'post',            'onsubmit'=>'return true;',            "style" => "margin:0px;"            ))        }}        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="nombre"><b>Nombre:</b></label>                    <input type="text" name="nombre" class="form-control" placeholder="Ingresar el/los nombre/s...">                </div>            </div>            <div class="col-md-4">                <div class="form-group">                    <label for="apellido"><b>Apellido:</b></label>                    <input type="text" name="apellido" class="form-control" placeholder="Ingresar el/los apellido/s...">                </div>            </div>        </div>        <div class="row">            <div class="col-md-4">                <div class="form group">                    <label for="mail"><b>Correo electrónico:</b></label>                    <input type="email" name="mail" class="form-control" placeholder="ejemplo@mail.com">                </div>            </div>            <div class="col-md-4">                <div class="form group">                    <label for="usuario"><b>Usuario: </b></label>                    <input type="text" name="usuario" class="form-control" placeholder="Ingresar el usuario...">                </div>            </div>        </div>        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="password"><b>Clave: </b></label>                    <input type="password" name="password" class="form-control" placeholder="Ingresar la clave...">                </div>            </div>            <div class="col-md-4">                <div class="form-group">                    <label for="password_confirmation"><b>Confirmar Clave: </b></label>                    <input type="password" name="password_confirmation" class="form-control" placeholder="Reingresar la clave...">                </div>            </div>        </div>        <button type="submit" class="btn btn-primary">Guardar</button>        {{  Form::close()  }}    </div>@stop