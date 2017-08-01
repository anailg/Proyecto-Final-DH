@extends('layouts.master')

@section('content')

<div class="container">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1>Agregar Dirección</h1>

                @include('layouts.errors')

                <form action="" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <input type="hidden" name="user_id" value="{{$user_id}}">
                    <input type="hidden" name="default" value="{{$default}}">

                    <div class="form-group">
                        <label for="nombrecompleto">Nombre completo</label>
                        <input type="text" name="nombrecompleto" id="nombrecompleto" 
                               class="form-control" value="{{old('nombrecompleto')}}">
                    </div>

                    <div class="form-group">
                        <label for="calle">Calle</label>
                        <input type="text" name="calle" id="calle" class="form-control" 
                               value="{{old('calle')}}">
                    </div>

                    <div class="form-group">
                        <label for="localidad">Localidad</label>
                        <input type="text" name="localidad" id="localidad" class="form-control" 	   value="{{old('localidad')}}">
                    </div>

                    <div class="form-group">
                        <label for="provincia">Provincia</label>
                        <input type="text" name="provincia" id="provincia" class="form-control" value="{{old('provincia')}}">
                    </div>

                    <div class="form-group">
                        <label for="codigo_postal">Codigo Postal</label>
                        <input type="text" name="codigo_postal" id="codigo_postal" 
                               class="form-control" value="{{old('codigo_postal')}}">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="{{old('telefono')}}">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="enviador" value="Enviar">
                    </div>
                    
                </form>

            </div>
        </div>
    </div>


@endsection
