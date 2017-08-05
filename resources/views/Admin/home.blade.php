@extends('/layouts.masterAdmin')

<div class="container-home">

	<div  class='usuarios'>			
		<a id='msgCantClientes'>Ya somos {{$cantUsuarios}} usuarios</a> 
	</div>
	
	@section('content')

		<div id="carrusel">
			<div class="banner">				
				<div class="imagenes">            
		            <img src="/images/banner/imagenBanner1.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner2.jpg" alt="foto"><!--  
		          --><img src="/images/banner/imagenBanner3.jpg" alt="foto"><!--
		          --><img src="/images/banner/imagenBanner4.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner5.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner6.jpg" alt="foto"><!--    
		          --><img src="/images/banner/imagenBanner7.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner8.jpg" alt="foto"><!--
		          --><img src="/images/banner/imagenBanner9.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner10.jpg" alt="foto"><!--       
		          --><img src="/images/banner/imagenBanner11.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner12.jpg" alt="foto"><!--
		          --><img src="/images/banner/imagenBanner13.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner14.jpg" alt="foto"><!--       
		          --><img src="/images/banner/imagenBanner15.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner16.jpg" alt="foto"><!--
		          --><img src="/images/banner/imagenBanner17.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner18.jpg" alt="foto"><!--
		          --><img src="/images/banner/imagenBanner19.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner20.jpg" alt="foto"><!--  
		          --><img src="/images/banner/imagenBanner1.jpg" alt="foto"><!--  
		          --><img src="/images/banner/imagenBanner2.jpg" alt="foto"><!--
		          --><img src="/images/banner/imagenBanner3.jpg" alt="foto"><!-- 
		          --><img src="/images/banner/imagenBanner4.jpg" alt="foto">
		      </div> 
			</div>
		</div>

		<div class="container">

			<div class="container-gris">
			
				<h1>Bienvenido Administrador!</h1>
				
			</div>

		</div>

	@endsection	

</div>	

@section('scripts')
	{{-- {{ asset ('/js/actualizarCantClientes.js') }}  --}}
	{{-- {{ asset ('/js/carrusel.js') }}  --}}
	{{-- <script src="/js/actualizarCantUsuarios.js"></script> --}}
	<script src="/js/carrusel.js"></script>
@endsection



