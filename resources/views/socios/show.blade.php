@extends('layouts.layoutAdmin')@section('contenido')    <div class="container">        <div class="row">            <div class="col-md-offset-1 col-md-10" align="center">                <h1>{{  $socio->nombre.' '.$socio->apellido  }}</h1>                <p><b>Nro. Documento: </b>{{  $socio->documento  }}</p>                <p><b>Fecha de nacimiento: </b>{{  $socio->fechaNac  }}</p>                <p><b>Dirección: </b>{{  $socio->domicilio  }}</p>                <p><b>Teléfono: </b>{{  $socio->telefono  }}</p>                <p><b>Correo electrónico: </b>{{  $socio->mail  }}</p>                <hr>                <h3>Historial de préstamos:</h3>            </div>        </div>    </div>@stop