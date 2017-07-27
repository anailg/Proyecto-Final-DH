@extends('layouts.master')

@section('content')
	<h1>Categorias</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Detalle</th>				
			</tr>
		</thead>

		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{ $producto->nombre }}</td>
					<td>{{ $producto->descripcion }}</td>
					<td><a href={{"/categorias/". $categoria->id}}>Ver</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $productos->links() }}

@endsection

