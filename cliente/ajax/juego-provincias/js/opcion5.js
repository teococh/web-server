var puntos;
var cont;

window.onload = function () {
    
    puntos = 0;
    cont = 0;

    fetch("js/provincias.json")
    .then(respuesta => respuesta.json() )
    .then(data => {
        json = data;
        pintar();
        console.log(json)
    });

}

function pintar() {
    
    for (let i = 0; i < 17; i++) {
        
        let contenedor = document.getElementById("contenedorPrincipal");
        let newDiv = document.createElement("div");
        let h4 = document.createElement("h4");
        let texto = document.createTextNode(json.comunidades[i].nombre);
        let input = document.createElement("input");
        newDiv.classList.add("contenedorTexto");
        newDiv.id = json.comunidades[i].capital;
        h4.classList.add("cajaTexto");
        input.setAttribute("type", "text");
        h4.appendChild(texto);
        newDiv.appendChild(h4);
        newDiv.appendChild(input)
        contenedor.appendChild(newDiv);
        input.addEventListener("blur", comprobar);
        
    }

}

function comprobar() {
    
    console.log(this.parentNode)
    if (this.value.toUpperCase() == this.parentNode.id.toUpperCase()) {
        puntos += 10;
        cont++;
    }else {
        puntos-=5;
    }
    document.getElementById("total").innerText = puntos;

    if (cont == 17) {
        document.getElementById("contenedorPuntos").classList.replace("ocultar", "mostrar")
        document.getElementById("resultado").classList.replace("ocultar", "mostrar" )
        document.getElementById("resultado").innerHTML = puntos;
    }

}