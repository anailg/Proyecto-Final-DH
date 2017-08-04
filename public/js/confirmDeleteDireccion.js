;(function (window, document, undefined) {

  var eliminar = document.getElementById('deleteDir')

  eliminar.addEventListener('click', function (evento) {

    	evento.preventDefault();

	    if (confirm("¿Esta seguro que desea eliminar esta dirección?")) {

	        console.log(this.getAttribute('href'));
	        window.location.replace(this.getAttribute('href'))
	    }
  
	});
 
}(window, document));