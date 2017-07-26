@extends('layouts.master')

@section('content')
	<h1>{{ $producto->nombre }}</h1>
	<h2>{{ $producto->descripcion }}</h2>
	<h3>{{ $producto->especificaciones }}</h3>
	<img class="img-responsive" src="{{asset('/storage/productos/'.$producto->imagen)}}">
@endsection
