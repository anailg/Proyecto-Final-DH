@extends('layouts.master')

@section('content')    

	<div class="container">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1>Buscar Productos</h1>                

                <form action="busqueda" method="get" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="categoria">Categoria </label>   
                        <select class="form-control" name="categoria"  >
                            <option value="">Todas</option>
                            @foreach ($categorias as $categoria)
                                <option value={{$categoria->id}}>{{$categoria->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="criterio">Criterio</label>
                        <input type="text" name="criterio" id="criterio" class="form-control">
                    </div>                    

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Buscar">
                    </div>
                    
                </form>

            </div>
        </div>
    </div>

@endsection
