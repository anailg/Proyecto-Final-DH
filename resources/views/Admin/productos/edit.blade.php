@extends('layouts.masterAdmin')

@section('content')

    
	<div class="container">

        <div class="row">            

            <div class="col-md-8 col-md-offset-2">
                <h1>Editar Producto</h1>

                @include('layouts.errors')
                
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{($producto->nombre)}}">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{($producto->descripcion)}}">
                    </div>
                    <div class="form-group">
                        <label for="especificaciones">Especificaciones</label>
                        <input type="text" name="especificaciones" id="especificaciones" class="form-control" value="{{($producto->especificaciones)}}">
                    </div>                    
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" value={{($producto->precio)}}>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imágen</label>
                        <input type="file" name="imagen" id="imagen" class="form-control"
                        value="{{($producto->imagen)}}">
                    </div>
                    <div class="form-group">
                        <label for="activo">Activo</label>                        
                            @if ($producto->activo) 
                                    <input type="checkbox" name="activo" id="activo" class="check-box" checked >                                
                            @else 
                                    <input type="checkbox" name="activo" id="activo" class="check-box" >
                            @endif                         
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="enviador" value="Enviar">
                    </div>
                </form>
            </div>
        </div>

        
        
    </div>

    


@endsection
