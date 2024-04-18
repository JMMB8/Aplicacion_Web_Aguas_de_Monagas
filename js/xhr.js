

// - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - -//
// Constantes para los Estados de Respuestas
// - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - -//

var CargadorAjax = {
	
	// No inicializado (objeto creado, pero no se ha invocado el método open)
	'NO_INICIALIZADO': 0,

	// Cargando (objeto creado, pero no se ha invocado el método send)
	'CARGANDO': 1,

	// Cargado (se ha invocado el método send, pero el servidor aún no ha respondido)
	'CARGADO': 2,

	// Interactivo (se han recibido algunos datos, aunque no se puede emplear la propiedad responseText)
	'INTERACTIVO': 3,

	// Completo (se han recibido todos los datos de la respuesta del servidor)
	'COMPLETO': 4,

	'xhr': false,

	'capa': null,

	'url': null,

	'metodo': null,

	'valores': null,
	
	// Constructor
	'CargadorContenidos': function(url, capa, metodo, valores) {
		this.url = url;
		this.capa = document.getElementById(capa);
		this.metodo = metodo;
		this.valores = valores;
		this.xhr = this.inicializa_xhr();
		//this.onerror = (funcionError) ? funcionError : this.defaultError;
		this.BuscaData();
	},
						  
	'inicializa_xhr': function() {
		
		try {

			this.xhr = new ActiveXObject("Msxml2.XMLHTTP");

		} catch (e) {

			try {

				this.xhr = new ActiveXObject("Microsoft.XMLHTTP");

			} catch (E) {

				this.xhr = false;

			}

		}

		if (!this.xhr && typeof XMLHttpRequest!='undefined') {

			this.xhr = new XMLHttpRequest();

		}

		return this.xhr;

	},
					  
	'BuscaData': function() {
					
		var loader = this;

		if(this.metodo.toUpperCase() == 'POST' || this.metodo.toUpperCase() == 'GET') {

			this.xhr.open(this.metodo.toUpperCase(),this.url, true);

			this.xhr.onreadystatechange = function() {
				loader.onReadyState.call(loader);
			}

			this.xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

			if (this.metodo.toUpperCase() == 'POST')
				this.xhr.send(this.valores);
			else
				this.xhr.send(null);

			return;
			
		}

	},
		
	'onReadyState': function() {
			
		var req = this.xhr;
		var ready = req.readyState;
			
		if (ready == this.CARGANDO) {

			// Cargando ...
			this.capa.innerHTML = "<b>Enviando Informacion al Servidor ...</b>";
			$("pdvsaCapaTransparente").style.display = "block";
			$("pdvsaCargaMediana").style.display     = "block";	

		} 
		else if (ready == this.COMPLETO) {
			
			$("pdvsaCapaTransparente").style.display = "none";
			$("pdvsaCargaMediana").style.display     = "none";	

			if(req.status == 200) {

				// Carga Finalizada y con Exito
				this.capa.innerHTML = req.responseText;

			} 
			else if(req.status == 404) {

				// Carga Finalizada, No se encontro la url especificada
				this.capa.innerHTML = "La direccion no existe";

			} 
			else {

				// Carga Finalizada y con Error
				this.capa.innerHTML = "Error: ".req.status;

			}

		}
	
	}

}
