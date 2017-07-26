;(function (window, document, undefined) {

	window.addEventListener('load', function (evento) {
    
		var linkPaleta = document.getElementById("paleta");	

	    evento.preventDefault();
	
		var paletaActual=checkPaleta(linkPaleta);
		linkPaleta.className = paletaActual;
		linkPaleta.href="css/"+paletaActual+".css";
		addEventCambiarPaleta();
	    
	})

	function addEventCambiarPaleta() {

		var botonPaleta = document.getElementById("btnPaleta");	    

		botonPaleta.addEventListener('click', function (evento) {

		    evento.preventDefault();

		    var elemento = document.getElementById("paleta");
			var paletaActual=checkPaleta(elemento)
		    
		    if (paletaActual == "paleta1") {
		      	elemento.className = "paleta2";
		      	elemento.href="css/paleta2.css"
		      	setCookie("paleta", "paleta2", 1);	      	
		    } else {
		      	elemento.className = "paleta1";
		      	elemento.href="css/paleta1.css"
		      	setCookie("paleta", "paleta1", 1);
			}
		})

	}


	function checkPaleta(elemento) {
    	
        var paleta = getCookie("paleta");

        if (paleta == "") {
            paleta = elemento.className;           //"paleta1" ; 
            setCookie("paleta", paleta, 1);
        }
        
        return paleta;
    }

		
	function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function setCookie(cname, cvalue, exdays) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	    var expires = "expires="+ d.toUTCString();
	    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

 
	
}(window, document));