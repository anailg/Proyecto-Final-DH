@extends('layouts.masterAdmin')

@section('content')

	<h1>Categorias</h1>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th colspan="3">Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach($categorias as $categoria)
				<tr>
					<td>{{ $categoria->nombre }}</td>
					<td><a href={{"/admin/categorias/". $categoria->id}}>Ver</a></td>
					<td><a href={{"/admin/categorias/edit/".$categoria->id}}>Editar</a></td>
					<td><a href={{"/admin/categorias/destroy/".$categoria->id}} id='deleteCateg'>Eliminar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
	<div class="container container-flex" >
		<div>	
			{{ $categorias->links() }}		
		</div>
		<div class="boton-paginate">
			<a href="/admin/categorias/create" class="btn btn-primary" role="button">Agregar</a>
		</div>
	</div>

@endsection

@section('scripts')
	<script src="/js/confirmDelete.js"></script>
@endsection