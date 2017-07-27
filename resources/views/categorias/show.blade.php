@extends('layouts.master')

@section('content')
	<h1>{{ $categoria->nombre }}</h1>
	<h2>{{ $categoria->descripcion }}</h2>
	<img class="img-responsive" src="{{asset('/storage/categorias/'.$categoria->imagen)}}">
@endsection
