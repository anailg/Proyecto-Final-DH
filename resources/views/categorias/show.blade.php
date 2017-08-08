@extends('layouts.master')

@section('content')

		<h1>{{ $categoria->nombre }}</h1>
		{{-- <img class="img-responsive" src="{{asset('/storage/categorias/'.$categoria->imagen)}}"> --}}

	<div class='container-flex-column'>

		<div class='container-flex '>

			@foreach ($categoria->productosAsoc() as $producto)

			  	<div class='elemento-flex'>	
				
					@if (file_exists(public_path('/storage/productos/'.$producto->imagen)))
			    		<img class="img-responsive" style="width:300px"	    	
				    	 	src="{{asset('/storage/productos/'.$producto->imagen)}}">
			    	@else
			    		<img class="img-responsive imgElemento" style="width:300px"	 
			    		src="{{asset('/images/no_disponible.png')}}" >
			    	@endif
			    	<a class="linkImg" href={{"/productos/". $producto->id}}>{{ $producto->nombre }}</a>

		    	</div>

			@endforeach	

		</div>

	</div>

	{{-- <a href="{{ URL::previous() }}" class="btn btn-primary" role="button">Volver</a> --}}

@endsection

@section ('scripts')
	<script src="/js/showElemento.js"></script>
@endsection
