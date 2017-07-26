@extends('layouts.master')

@section('content')
	<h1>Productos</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Activo</th>
				<th colspan="3">Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{ $producto->nombre }}</td>
					<td>{{ $producto->descripcion }}</td>
					<td>{{ $producto->activo }}</td>
					<td><a href={{"/productos/". $producto->id}}>Ver</a></td>
					<td><a href={{"/admin/productos/edit/".$producto->id}}>Editar</a></td>
					<td><a href={{"/admin/productos/destroy/".$producto->id}} id='deleteProd'>Eliminar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $productos->links() }}

@endsection

@section('scripts')
	<script src="js/confirmDelete.js"></script>
@endsection