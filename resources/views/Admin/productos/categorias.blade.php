@extends('layouts.masterAdmin')

@section('content')

	<div class=container>

		<div class="col-sm-8">

			<h2>{{ $producto->nombre }}</h2>		

			<div class="media">
				  <div class="media-left">
				    <img class="media-object" style="width:200px"
				    	 src="{{asset('/storage/productos/'.$producto->imagen)}}" >
				  </div>
				  <div class="media-body">
					    {{-- <h2 class="media-heading">{{ $producto->nombre }}</h2> --}}
					    <h3>{{ $producto->descripcion }}</h3>
					      <p>{{ $producto->especificaciones }}</p>
					      <p>Precio = ${{ $producto->precio }}</p>				    
				  </div>
			</div>
		</div>

		<div class="col-sm-4">

			<form action="" method="post" enctype="multipart/form-data">

				{{ csrf_field() }}
			
				<div class="form-group">
					<label for="categorias">Categorias</label><br> 					

					@foreach ($categorias as $categoria)
					 	@if ($categoria->tieneProducto($producto->id)) 					 		
					 		<input type="checkbox" name="categorias[]"
					 		checked value={{ $categoria->id }}>{{ $categoria->nombre }}<br>
	                    @else 
	                    	<input type="checkbox" name="categorias[]"
	                        value={{ $categoria->id }}>{{ $categoria->nombre }}<br>
	                    @endif
					@endforeach
				</div>

				<div class="form-group">
                    <input class="btn btn-primary" type="submit" name="enviador" value="Guardar">
                </div>

			</form>
			  
		</div>
		

	</div>

@endsection