let comunidad;
let provincias;
let peticion_http;

window.onload = function() {
	comunidad = document.getElementById("comunidad");
	provincias = document.getElementById("provincias");
	let form = new FormData();
	hacerPeticion("http://localhost/DWES/ajax_select_XML/cargar_autonomias.php", "GET", form, mostrar_autonomias);
	comunidad.addEventListener("change", function(){
		if(this.value == "none") {
			provincias.innerHTML = "";
		}
		else{
			//hacerPeticion("http://localhost/DWES/ajax_select_XML/provincias.php?idComunidad=" + this.value, "GET", form, mostrar_provincias);
			form.append("idComunidad", this.value);
			hacerPeticion("http://localhost/DWES/ajax_select_XML/provincias.php", "POST", form, mostrar_provincias);
		}
	})
};

function hacerPeticion(url, metodo, formulario, mostrar) {	
	// obtener la instancia del objeto XMLHttpRequest
	peticion_http = new XMLHttpRequest();
	// preparar la funcion de respuesta
	peticion_http.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) { // this es peticion_http
			mostrar(); // llamamos a mostrar_autonomias o mostrar_provincias 
		}
	};
	// Definimos como queremos realizar la comunicación
	peticion_http.open(metodo, url, true);
	//Enviamos la solicitud
	peticion_http.send(formulario);
}

function mostrar_autonomias() {
	let xml = peticion_http.responseXML;
	let autonomiasxml = xml.getElementsByTagName('autonomia');	
	for(let x = 0; x < autonomiasxml.length; x++){
		let opcion = document.createElement("option");
		opcion.value = autonomiasxml[x].id;
		opcion.innerText = autonomiasxml[x].innerHTML;
		comunidad.appendChild(opcion);
	}
}

function mostrar_provincias() {
	let xml = peticion_http.responseXML;
	let provinciasxml = xml.getElementsByTagName("provincia");
	let contenidosAMostrar = "";
	for(let x = 0; x < provinciasxml.length; x++){
		contenidosAMostrar += "<option value=" + provinciasxml[x].id + ">" + provinciasxml[x].innerHTML + "</option>";
	}
	provincias.innerHTML = contenidosAMostrar;
}