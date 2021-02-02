window.onload = function () {
    
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
        input.setAttribute("type", "text")
        h4.appendChild(texto);
        newDiv.appendChild(h4);
        newDiv.appendChild(input)
        contenedor.appendChild(newDiv);
        
    }

}