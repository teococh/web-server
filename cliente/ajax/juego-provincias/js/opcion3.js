
var provinciasUsadas;
var todas;
let cont;

window.onload = function () {
    
    provinciasUsadas = Array();
    todas = Array();
    cont = document.getElementById("contenedorProvincias");

    fetch("js/provincias.json")
    .then(respuesta => respuesta.json() )
    .then(data => {
        json = data;
        pintar();
        console.log(json)
    });

}

function pintar() {
    for (let i = 0; i < 52; i++) {
        let input = document.createElement("input");
        let newDiv = document.createElement("div");
        newDiv.classList.add("contenedorTexto");
        input.setAttribute("name", i);
        newDiv.appendChild(input);
        input.addEventListener("blur", comprobar);
        cont.appendChild(newDiv);
    }
}
function comprobar() {
    // comunidades[0].provincias[0].nombre
    console.log(this.value)
    for (let i = 0; i < 16; i++) {
        json.comunidades[i].provincias.forEach(element2 => {
            if (this.value == element2.nombre) {
                if (!provinciasUsadas.includes(this.value)) {
                    this.classList.add("bien");
                    provinciasUsadas.push(this.value);
                }
            }
        });
    }
    if (this.value == "Ceuta" || this.value == "Melilla") {
        if (provinciasUsadas.includes(this.value)) {
            provinciasUsadas.push(this.value);
            this.classList.add("bien");
        }
    }

    if (provinciasUsadas >= 52) {
        document.getElementById("contenedorPuntos").classList.replace("ocultar", "mostrar")
        document.getElementById("resultado").classList.replace("ocultar", "mostrar" )
    }
}