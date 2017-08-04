;(function (window, document, undefined) {

  	document.querySelectorAll('.imgElemento').forEach(
  		function(foto){

  			foto.addEventListener('click', function (evento) {

		    	evento.preventDefault();

		    	var padre= this.parentNode; 

		    	var link = padre.querySelector('.linkImg');

			    console.log(link);

			    window.location.replace(link.getAttribute('href'));

	  		}); 
  		
		});
 
}(window, document));