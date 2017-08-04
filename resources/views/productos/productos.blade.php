@extends('layouts.master')

@section('content')

	<div class='container-flex'>		

		@foreach($productos as $producto)

			<div class='elemento-flex'>	
				
				@if (file_exists(public_path('/storage/productos/'.$producto->imagen)))
		    		<img class="media-object imgElemento" style="width:300px"	    	
			    	 	 src="{{asset('/storage/productos/'.$producto->imagen)}}">
		    	@else
		    		<img class="media-object imgElemento" style="width:300px"	 
		    		     src="{{asset('/images/no_disponible.png')}}" >
		    	@endif
		    	
		    	<a class="linkImg" href={{"/productos/". $producto->id}}>
		    	         {{ $producto->nombre }}</a>

		    </div>
				
		@endforeach
			
	</div>

@endsection

@section ('scripts')
	<script src="/js/showElemento.js"></script>
@endsection

