@extends('layouts.master')

@section('content')
	<div class="container">
		<h2>Administrar Productos</h2>
		<ul class="menu-admin">
			<li class="descripcion"><a href="/admin/productos/create">Agregar</a></li>
			<li class="descripcion">
				<a href="/admin/productos/index">Ver/Editar/Eliminar</a></li>
		</ul>
	</div>

@endsection