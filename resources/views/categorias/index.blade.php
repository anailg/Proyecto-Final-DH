@extends('layouts.master')

@section('content')
	<h1>Categorias</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th colspan="3">Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{ $producto->nombre }}</td>
					<td>{{ $producto->descripcion }}</td>
					<td><a href={{"/admin/categorias/". $producto->id}}>Ver</a></td>
					<td><a href={{"/admin/categorias/edit/".$producto->id}}>Editar</a></td>
					<td><a href={{"/admin/categorias/destroy/".$producto->id}} id='deleteCateg'>Eliminar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $productos->links() }}

@endsection

@section('scripts')
	<script src="js/confirmDelete.js"></script>
@endsection