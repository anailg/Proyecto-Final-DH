@extends('layouts.masterAdmin')

@section('content')

	<div class=container>

		<h2>{{ $producto->nombre }}</h2>
		{{-- <h3>{{ $producto->descripcion }}</h3>		
		<p>{{ $producto->especificaciones }}</p>
		<p>${{ $producto->precio }}</p> --}}
		{{-- <img class="img-responsive" src="{{asset('/storage/productos/'.$producto->imagen)}}"> --}}

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
				      <ul>Categorias
					      @foreach ($producto->categoriasAsoc() as $categoria)
					      	<li>{{ $categoria->nombre }}</li>
					      @endforeach
				      </ul>			    
			  </div>
		</div>

		{{-- <a href="back" class="btn btn-primary" role="button">Volver</a> --}}

	</div>

@endsection
