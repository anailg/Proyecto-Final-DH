	<header class="main-header" >				
		
		{{-- <img src="{{ asset('images/logo.jpg" alt="logotipo')}}" class="logo"> --}}
		<img src="/images/logo.jpg" alt="logotipo" class="logo">					
				
		<div class="main-nav">

		    @include('layouts.navLogin')
						
			<nav>
				<ul class="bar-nav">
					<li class="icono"><a href="/home">&#xf015</a></li>
					<li class="descripcion"><a href="/admin/productos/index">Productos</a></li>
					<li class="descripcion"><a href="/admin/categorias/index">Categorias</a></li>
					<li class="descripcion"><a href="#">Usuarios</a></li>
					<li class="descripcion"><a href="#">Promociones</a></li>
					<li class="icono"><a href="faq">&#xf128</a></li>			
					<li class="icono"><a href="#">&#xf002</a></li>	
					<li class="icono"><a href="#">&#xf07a</a></li>
					<li class="icono" id="btnPaleta"><a href="#">&#xf1fc</a></li>
				</ul>
			</nav>
			
		</div>

		<!-- Scripts -->
		<script src="{{ asset('/js/setPaleta.js')}}"></script>
    	<script src="{{ asset('/js/app.js') }}"></script>

	</header>