<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


@include("layouts.head")

<body>

	@include("layouts.header")
			
	@yield('content')
		
	@include ("layouts.footer")

	@yield('scripts')

</body>

</html>

