@extends('layouts.layoutAdmin')@section('contenido')    <div class="container">        <h1>Editar categoría</h1>        {{  Form::open( array('route'=>array('grupos_socios.update', $grupo->id), 'method'=>'post', 'onsubmit'=>'return true;',"style" => "margin:0px;"))  }}        {!!  method_field('PUT')  !!}        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="isbn"><b>Nombre:</b></label>                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre..." value="{{  $grupo->nombre}}">                    {!!  $errors->first('nombre', '<span class="errors">:message</span>')  !!}                </div>            </div>        </div>        <div class="row">            <div class="col-md-8" align="center">                <button type="submit" class="btn btn-warning">Modificar</button>            </div>        </div>        {{  Form::close()  }}    </div>@stop