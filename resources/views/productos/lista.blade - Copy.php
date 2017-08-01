@extends('layouts.master')

@section('content')
	<h1>Productos</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th>Detalle</th>				
			</tr>
		</thead>

		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{ $producto->nombre }}</td>
					<td>{{ $producto->descripcion }}</td>
					<td>{{ $producto->precio }}</td>
					<td><a href={{"/productos/". $producto->id}}>Ver</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $productos->links() }}

@endsection

