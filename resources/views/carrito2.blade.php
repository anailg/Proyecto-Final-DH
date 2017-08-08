@extends('layouts.masterAdmin')

@section('content')
	<h1>Productos</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Importe</th>
			</tr>
		</thead>

		<tbody>
			@foreach($items as $item)
				<tr>
					<td>{{ $item->getProducto()->nombre }}</td>
					<td>{{ $item->cantidad }}</td>
					<td>{{ $item->getProducto()->precio }}</td>
					<td>{{ $item->cantidad*$item->getProducto()->precio }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection