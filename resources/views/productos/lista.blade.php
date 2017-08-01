@extends('layouts.master')

@section('content')

	<div class='container'>

			<h1>Productos</h1>
	
			@foreach($productos as $producto)				
				<div class="media">
				  <div class="media-left">
				    <img class="media-object" style="width:60px"
				    	 src="{{asset('/storage/productos/'.$producto->imagen)}}" >
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

