@extends('layouts.masterAdmin')

@section('content')    

	<div class="container">

        <div class="row">
        
            <div class="col-md-8 col-md-offset-2">

                <h1>Editar Categoria</h1>

                @include('layouts.errors')

                <form action="" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{($categoria->nombre)}}">
                    </div>
                                    
                    <div class="form-group">
                        <label for="imagen">Imágen</label>
                        <input type="file" name="imagen" id="imagen" class="form-control"
                        value="{{($categoria->imagen)}}">
                    </div> 

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="enviador" value="Enviar">
                    </div>

                </form>
                
            </div>
        </div>
    </div>

@endsection
