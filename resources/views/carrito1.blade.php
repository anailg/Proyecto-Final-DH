@extends('layouts.master')

@section('content')

	<div class='container container-ventana'>

		<div class="row">
		  <div class="col-sm-6"><strong>Producto</strong></div>
		  <div class="col-sm-2"><strong>Cantidad</strong></div>
		  <div class="col-sm-2"><strong>Precio</strong></div>
		  <div class="col-sm-2"><strong>Importe</strong></div>
		</div>
		<br>

		@foreach ($items as $item)

			<div class="row">	
				<div class="col-sm-6">{{$item->producto}}</div>
				<div class="col-sm-2">{{$item->cantidad}}</div>
				<div class="col-sm-2">{{$item->precio}}</div>
				<div class="col-sm-2">{{$item->cantidad*$item->precio}}</div>
			</div>

			<br>
		@endforeach

		<br>
		<div class="row">
			<div class="col-sm-10"><strong>Total</strong></div>
			<div class="col-sm-2"></div>
		</div>
	

		<div>
			<div class='container-flex'>
				<a href="#" role="button" class="btn btn-primary btn-sm elemento-flex">
					Guardar carrito</a>
				<a href="#" role="button" class="btn btn-primary btn-sm elemento-flex">
					Confirmar pedido</a>
				<a href="{{ URL::previous() }}" 
				  class="btn btn-primary btn-sm elemento-flex" role="button">Volver</a>
			</div>
		</div>

	</div>

@endsection
