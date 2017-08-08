
<div class='container-caja'>

	<header class="main-header" >				
		
		<img src="/images/logo.jpg" alt="logotipo" class="logo">					
		
		<div class="main-nav">

		     @include('layouts.navLogin')
			
			<nav>
				<ul class="bar-nav">
					<li class="icono"><a href="/home">&#xf015</a></li>
					<li class="descripcion"><a href="/productos">Productos</a></li>
					<li class="descripcion"><a href="/categorias">Categorias</a></li>
					<li class="descripcion"><a href="#">Nosotros</a></li>
					<li class="descripcion"><a href="#">Contacto</a></li>
					<li class="icono"><a href="/faq">&#xf128</a></li>			
					<li class="icono"><a href="/buscar">&#xf002</a></li>	
					<li class="icono"><a href="/carrito">&#xf07a</a></li>
					<li class="icono" id="btnPaleta"><a href="#">&#xf1fc</a></li>
				</ul>
			</nav>

		</div>

		<!-- Scripts -->
		<script src="{{ asset('/js/setPaleta.js')}}"></script>
    	<script src="{{ asset('/js/app.js') }}"></script>

	</header>

</div>




