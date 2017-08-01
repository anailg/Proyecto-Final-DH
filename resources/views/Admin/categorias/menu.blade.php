@extends('layouts.masterAdmin')

@section('content')
	<div class="container">
		<h2>Administrar Categorias</h2>
		<ul class="menu-admin">
			<li class="descripcion"><a href="/admin/categorias/create">Agregar</a></li>
			<li class="descripcion">
				<a href="/admin/categorias/index">Ver/Editar/Eliminar</a></li>
		</ul>
	</div>

@endsection