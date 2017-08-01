@extends('layouts.master')

@section('content')

	<h1>Direcciones</h1>
	
	<div class=direcciones>

			
			@foreach($direcciones as $direccion)
			
				<div class="direccion">

					<h3>{{$direccion->nombrecompleto}}</h3>

					{{$direccion->calle}} <br>
					{{$direccion->localidad}}<br>
					{{$direccion->provincia}}
					({{$direccion->codigo_postal}})<br>
					Teléfono: {{$direccion->telefono}}<br><br>

					@if ($direccion->default)  <h4>Dirección Default</h4>  @endif
					
					<a href={{"/direcciones/edit/".$direccion->id}}>Editar</a> {{ ' | ' }}
					<a href={{"/direcciones/destroy/".$direccion->id}}>Eliminar</a> 
					@if (!$direccion->default)  
					     {{ ' | ' }}
					     <a href={{"/direcciones/setDefault/".$direccion->id}}>
					        Establecer como Default</a> 
					@endif					

				</div>

			@endforeach

			<div class="agregar-direccion">
				<a href="/direcciones/create">Agregar dirección de entrega</a>
			</div>

	</div>

@endsection