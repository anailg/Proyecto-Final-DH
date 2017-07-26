;(function (window, document, undefined) {

  var eliminar = document.document.getElementById('#deleteProd')

  eliminar.addEventListener('click', function (evento) {

    evento.preventDefault();

    if (confirm("¿Esta seguro que desea eliminar este producto?")) {

        window.location.href = this.getAttribute('href');
    }
  
  }
 
}(window, document));