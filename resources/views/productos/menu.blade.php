@extends('layouts.master')

@section('content')
	<ul class="admin-productos">
		<li class="descripcion"><a href="/admin/productos/create">Alta</a></li>
		<li class="descripcion"><a href="/admin/productos/index">Baja</a></li>
		<li class="descripcion"><a href="/admin/productos/index">Modificación</a></li>
		<li class="descripcion"><a href="/admin/productos/index">Mostrar</a></li>
	</ul>

@endsection