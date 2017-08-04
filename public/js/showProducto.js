;(function (window, document, undefined) {

  	var foto = document.querySelector('.imgElemento')

  	foto.addEventListener('click', function (evento) {

    	evento.preventDefault();

    	var padre= this.parentNode; 

    	var link = padre.querySelector('.linkImg');

	    console.log(link.getAttribute('href'));

	    window.location.replace(link.getAttribute('href'));

	});
 
}(window, document));