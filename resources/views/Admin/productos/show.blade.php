@extends('layouts.masterAdmin')

@section('content')

	<div class="container-flex-column">

		<div class="media" style='padding:4em'>
			  <div class="media-left">
			    <img class="media-object" style="width:200px"
			    	 src="{{asset('/storage/productos/'.$producto->imagen)}}" >
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
				      </ul>			    
			  </div>
		</div>

		<div>
			<a href="{{ URL::previous() }}" class="btn btn-primary" role="button">Volver</a>
		</div>

	</div>

@endsection
