@extends('layouts.layoutAdmin')@section('contenido')    <div class="container">        <div class="row">            <div class="col-md-offset-1 col-md-10" align="center">                <h3>{{  $libro->titulo.' - '  }}</h3>                <p><b>ISBN: </b>{{  $libro->isbn  }}</p>                <p><b>Páginas: </b>{{  $libro->paginas  }}</p>                <p><b>Edición: </b>{{  $libro->edicion  }}</p>                <p><b>Ejemplares disponibles: </b>{{  $libro->cantDisp  }}</p>            </div>        </div>    </div>@stop