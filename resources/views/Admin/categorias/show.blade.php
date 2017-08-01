@extends('layouts.masterAdmin')

@section('content')

	<div class=container>
	
		<div class="col-sm-4">
			
			<img style="width:200px" class="img-responsive" 
				 src="{{asset('/storage/categorias/'.$categoria->imagen)}}">
		</div>

		<div class="col-sm-8">

		<div class="list-group">
			<h2>{{ $categoria->nombre }}</h2>	
			@foreach ($categoria->productosAsoc() as $producto)
				  <a href={{"/admin/productos/". $producto->id}} class="list-group-item">
				  {{$producto->nombre}}</a>
			@endforeach				  
		</div>

		</div>		
		
	</div>

@endsection


