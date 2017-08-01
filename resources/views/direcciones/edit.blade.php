@extends('layouts.master')

@section('content')

<div class="container">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1>Editar Dirección</h1>

                @include('layouts.errors')

                <form action="" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="nombrecompleto">Nombre completo</label>
                        <input type="text" name="nombrecompleto" id="nombrecompleto" 
                               class="form-control" value="{{$direccion->nombrecompleto}}">
                    </div>

                    <div class="form-group">
                        <label for="calle">Calle</label>
                        <input type="text" name="calle" id="calle" class="form-control" 
                               value="{{$direccion->calle}}">
                    </div>

                    <div class="form-group">
                        <label for="localidad">Localidad</label>
                        <input type="text" name="localidad" id="localidad" class="form-control" 	   value="{{$direccion->localidad}}">
                    </div>

                    <div class="form-group">
                        <label for="provincia">Provincia</label>
                        <input type="text" name="provincia" id="provincia" class="form-control" value="{{$direccion->provincia}}">
                    </div>

                    <div class="form-group">
                        <label for="codigo_postal">Codigo Postal</label>
                        <input type="text" name="codigo_postal" id="codigo_postal" 
                               class="form-control" value="{{$direccion->codigo_postal}}">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="{{$direccion->telefono}}">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="enviador" value="Enviar">
                    </div>
                    
                </form>

            </div>
        </div>
    </div>


@endsection
