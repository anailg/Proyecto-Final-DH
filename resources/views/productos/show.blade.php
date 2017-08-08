@extends('layouts.master')

@section('content')

	<div class="container-flex-column" >

		<div class="media" style='padding:4em'>

			<div class="media-left">
			  	
		    	@if (file_exists(public_path('/storage/productos/'.$producto->imagen)))
		    		<img class="media-object" style="width:300px"	    	
		    	 	src="{{asset('/storage/productos/'.$producto->imagen)}}">
		    	@else
		    		<img class="media-object" style="width:300px"	 
		    		src="{{asset('/images/no_disponible.png')}}" >
		    	@endif

			</div>

			<div class="media-body">

			    <h2 class="media-heading">{{ $producto->nombre }}</h2>
			    <h3>{{ $producto->descripcion }}</h3>
			    <h4>{{ $producto->especificaciones }}</h4>
			    <h4>Precio = ${{ $producto->precio }}</h4>

			    <ul>Categorias
				    @foreach ($producto->categoriasAsoc() as $categoria)
				      	<li><a href={{"/categorias/".$categoria->id}}>
				      		   {{ $categoria->nombre }}</a>
	    	   			</li>
				    @endforeach
			    </ul><br>	

			    <a href={{"/carrito/add/".$producto->id}} 
			         class="btn btn-default btn-sm icono" role="button">
			         Agregar al &#xf07a</a>

			</div>

		</div>

		<div>
			<a href="{{ URL::previous() }}" class="btn btn-primary" role="button">Volver</a>
			{{-- <a href="back" class="btn btn-primary" role="button">Volver</a> --}}
		</div>
		
	</div>

@endsection
