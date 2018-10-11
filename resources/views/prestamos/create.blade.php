@extends('layouts.layoutAdmin')@section('contenido')    <div class="container">        <div class="row">            <div class="col-md-12" align="center">                <h1>Nuevo préstamo</h1>            </div>        </div>        {{  Form::open(array(            'route'=>'prestamos.store',            'method'=>'post',            'onsubmit'=>'return true;',            "style" => "margin:0px;"            ))        }}        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="id_libro"><b>Libro: </b></label>                    <select name="id_libro" id="id_libro" class="form-control">                        <option value="default">Seleccione un libro...</option>                        @foreach($libros as $libro)                            <option value="{{  $libro->id  }}">{{  $libro->titulo  }}</option>                        @endforeach                    </select>                </div>            </div>            <div class="col-md-4">                <div class="form-group">                    <label for="id_socio"><b>Socio: </b></label>                    <select name="id_socio" id="id_socio" class="form-control">                        <option value="default">Seleccione un socio...</option>                        @foreach($socios as $socio)                            <option value="{{  $socio->id  }}">{{  $socio->nombre.' '.$socio->apellido.' - '.$socio->documento  }}</option>                        @endforeach                    </select>                </div>            </div>        </div>        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="fecha_inicio"><b>Fecha de inicio: </b></label>                    <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">                </div>            </div>            <div class="col-md-4">                <div class="form group">                    <label for="fecha_fin"><b>Fecha de finalización: </b></label>                    <input type="date" id="fecha_fin" name="fecha_fin" class="form-control">                </div>            </div>        </div>        <div class="row">            <div class="col-md-4" hidden>                <div class="form-group">                    <label for="fecha_devuelto"><b>Fecha devuelto: </b></label>                    <input type="date" id="fecha_devuelto" name="fecha_devuelto" class="form-control">                </div>            </div>            <div class="col-md-2" hidden>                <label for="check_devuelto"><b>Devuelto: </b></label>                <div id="check_devuelto">                    <div class="form-check form-check-inline">                        <input class="form-check-input" type="radio" name="devuelto" id="checkDev1" value="1">                        <label class="form-check-label" for="checkDev1">Si</label>                    </div>                    <div class="form-check form-check-inline">                        <input class="form-check-input" type="radio" name="devuelto" id="checkDev2" value="0" checked>                        <label class="form-check-label" for="checkDev2">No</label>                    </div>                </div>            </div>            <div class="col-md-2" hidden>                <label for="check_aviso"><b>Aviso de retraso: </b></label>                <div id="check_aviso">                    <div class="form-check form-check-inline">                        <input class="form-check-input" type="radio" name="aviso" id="checkAviso1" value="1">                        <label class="form-check-label" for="checkAviso1">Si</label>                    </div>                    <div class="form-check form-check-inline">                        <input class="form-check-input" type="radio" name="aviso" id="checkAviso2" value="0" checked>                        <label class="form-check-label" for="checkAviso2">No</label>                    </div>                </div>            </div>        </div>        <div class="row">            <div class="col-md-8" align="center">                <button type="submit" class="btn btn-primary">Registrar</button>            </div>        </div>        {{  Form::close()  }}    </div>@stop