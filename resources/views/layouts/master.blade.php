<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- <title>Cooking Company</title> --}}
	<title>Cooking Company</title>

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel='stylesheet' type='text/css' id='paleta' class='paleta1' href='css/paleta1.css'>
	<link rel="stylesheet" type="text/css" href="css/carrusel.css">
</head>

<body>

	@include("layouts.header")
			
	@yield('content')
		
	@include ("layouts.footer")

	@yield('scripts')

</body>

</html>

