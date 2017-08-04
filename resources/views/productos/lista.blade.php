@extends('layouts.master')

@section('content')

	<div class='container'>

			<h1>Productos</h1>
	
			@foreach($productos as $producto)				
				<div class="media">
				  <div class="media-left">
				    @if (file_exists(public_path('/storage/productos/'.$producto->imagen)))
		    		<img class="media-object" style="width:120px"	    	
			    	 	src="{{asset('/storage/productos/'.$producto->imagen)}}">
			    	@else
			    		<img class="media-object" style="width:120px"	 
			    		src="{{asset('/images/no_disponible.png')}}" >
			    	@endif
				  </div>
				  <div class="media-body">
				    <h4 class="media-heading">{{ $producto->nombre }}</h4>
				    <p>{{ $producto->descripcion }}</p>
				    {{-- <a class="btn" role="button" href={{"/productos/". $producto->id}}>Ver</a> --}}
				    <a href={{"/productos/". $producto->id}}>Ver</a>
				  </div>
				</div>
			@endforeach
		
			{{ $productos->links() }}

	</div>

@endsection

