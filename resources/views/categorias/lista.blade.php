@extends('layouts.master')

@section('content')
	
	<div class='container-flex'>

		@foreach($categorias as $categoria)				
			
			<div class='elemento-flex'>

				@if (file_exists(public_path('/storage/categorias/'.$categoria->imagen)))
	    			<img class="img-responsive imgElemento" style="width:200px"	    	
		    	 		 src="{{asset('/storage/categorias/'.$categoria->imagen)}}">
		    	@else
		    		<img class="img-responsive imgElemento" style="width:200px"	 
	    				 src="{{asset('/images/no_disponible.png')}}" >
		    	@endif

		    	<a class="linkImg" 
		    	   href={{"/categorias/".$categoria->id}}>{{ $categoria->nombre }}</a>
	    	</div>

		@endforeach	

	</div>			
	
@endsection

@section ('scripts')
	<script src="/js/showElemento.js"></script>
@endsection

