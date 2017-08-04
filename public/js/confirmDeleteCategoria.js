;(function (window, document, undefined) {

  var eliminar = document.getElementById('deleteCateg')

  eliminar.addEventListener('click', function (evento) {

    	evento.preventDefault();

	    if (confirm("¿Esta seguro que desea eliminar esta categoría?")) {

	        console.log(this.getAttribute('href'));
	        window.location.replace(this.getAttribute('href'))
	    }
  
	});
 
}(window, document));