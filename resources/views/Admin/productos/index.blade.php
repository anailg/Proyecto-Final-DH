@extends('layouts.masterAdmin')

@section('content')
	<h1>Productos</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				{{-- <th>Activo</th> --}}
				<th colspan="4">Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{ $producto->nombre }}</td>
					<td>{{ $producto->descripcion }}</td>
					{{-- <td>{{ $producto->activo }}</td> --}}
					<td><a href={{"/admin/productos/". $producto->id}}>Ver</a></td>
					<td><a href={{"/admin/productos/edit/".$producto->id}}>Editar</a></td>
					<td><a href={{"/admin/productos/categorias/".$producto->id}}>Categorias</a></td>
					<td><a href={{"/admin/productos/destroy/".$producto->id}} id='deleteProd'>Eliminar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="container container-flex" >
		<div>	
			{{ $productos->links() }}		
		</div>
		
		<div class="boton-paginate">
			<a href="/admin/productos/create" class="btn btn-primary" role="button">Agregar</a>
		</div>
		
	</div>
	

@endsection

@section('scripts')
	<script src="/js/confirmDelete.js"></script>
@endsection