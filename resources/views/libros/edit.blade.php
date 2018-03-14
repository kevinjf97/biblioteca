@extends('layouts.layoutAdmin')@section('contenido')    <div class="container">        <h1>Editar libro</h1>        {{  Form::open( array(            'route'=>array('libros.update', $libro->id),            'method'=>'post',            'onsubmit'=>'return true;',            "style" => "margin:0px;"            ))        }}        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="isbn"><b>ISBN:</b></label>                    <input type="text" name="isbn" class="form-control" placeholder="Ingrese el ISBN..." value="{{  $libro->isbn  }}">                </div>            </div>            <div class="col-md-4">                <div class="form-group">                    <label for="titulo"><b>Título:</b></label>                    <input type="text" name="titulo" class="form-control" placeholder="Ingrese el título..." value="{{  $libro->titulo  }}">                </div>            </div>        </div>        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="paginas"><b>Páginas:</b></label>                    <input type="int" name="paginas" class="form-control" placeholder="Ingrese el número de páginas..." value="{{  $libro->paginas  }}">                </div>            </div>            <div class="col-md-4">                <div class="form-group">                    <label for="autor"><b>Autor:</b></label>                    <select name="idAutor" id="idAutor" class="form-control">                        <option value="default">Seleccione un autor...</option>                        @foreach($autores as $autor)                            <option value="{{  $autor->id  }}">{{  $autor->nombre.' '.$autor->apellido  }}</option>                        @endForeach                    </select>                </div>            </div>        </div>        <div class="row">            <div class="col-md-4">                <div class="form-group">                    <label for="edicion"><b>Edición:</b></label>                    <input type="text" name="edicion" class="form-control" placeholder="Ingrese la edición..." value="{{  $libro->edicion  }}">                </div>            </div>            <div class="col-md-4">                <div class="form-group">                    <label for="cantidad"><b>Cantidad:</b></label>                    <input type="int" name="cantidad" class="form-control" placeholder="Ingrese la cantidad...">                </div>            </div>        </div>        <div class="row">            <div class="col-md-8">                <div class="form-group">                    <label for="thumb"><b>Portada:</b></label>                    <input type="file" name="thumb" class="form-control" placeholder="Seleccione una portada...">                </div>            </div>        </div>        <div class="row">            <div class="col-md-8">                <div class="form-group">                    <label for="sipnosis"><b>Sipnosis:</b></label>                    <textarea name="sipnosis" id="sipnosis" cols="30" rows="5" class="form-control" placeholder="Escriba la sipnosis...">{{  $libro->sipnosis  }}</textarea>                </div>            </div>        </div>        <div class="row">            <div class="col-md-8" align="center">                <button type="submit" class="btn btn-warning">Modificar</button>            </div>        </div>        {{  Form::close()  }}    </div>@stop