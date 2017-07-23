;(function (window, document, undefined) {	
	
		setInterval(actualizarCartel, 30000);

		function actualizarCartel(){

			var elemento = document.getElementById("msgCantClientes");
		
			var req = new XMLHttpRequest()

	    	req.onreadystatechange = function () {
	      
	      		if (this.readyState === 4 && this.status === 200) {
	      			var respuesta = JSON.parse(this.responseText)
	      			elemento.innerText=
                 	"Ya somos "+respuesta.cantUsuarios+" usuarios"
				}
			}	
			// req.open('GET', 'php/cantClientes.controller.php')
			req.open('GET','cantUsuarios')
	    	req.send()
 
		} 

}(window, document));

