
var provinciasUsadas;
var todas;
let cont;
let puntos;

window.onload = function () {
    
    provinciasUsadas = Array();
    todas = Array();
    cont = document.getElementById("contenedorProvincias");
    puntos = 0;

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

    let x = this.value.toUpperCase();
    let y = true;

    // comunidades[0].provincias[0].nombre
    console.log(x)
    for (let i = 0; i < 16; i++) {
        json.comunidades[i].provincias.forEach(element2 => {
            if (x == element2.nombre.toUpperCase()) {
                if (!provinciasUsadas.includes(x)) {
                    this.classList.remove("mal");
                    this.classList.add("bien");
                    provinciasUsadas.push(x);
                    puntos += 10;
                    y = false;
                    document.getElementById("ultima").innerHTML = +10;
                }
            }
        });
    }
    if (x == ("CEUTA") || x == "MELILLA") {
        if (!provinciasUsadas.includes(x)) {
            provinciasUsadas.push(x);
            this.classList.remove("mal");
            this.classList.add("bien");
            console.log("bien")
            y = false;
            puntos+=10;
            document.getElementById("ultima").innerHTML = +10;
        }
    }

    if (y) {
        puntos -= 5;
        this.classList.add("mal");
        document.getElementById("ultima").innerHTML = -5;
    }
    document.getElementById("total").innerText = puntos;

    if (provinciasUsadas >= 52) {
        document.getElementById("contenedorPuntos").classList.replace("ocultar", "mostrar")
        document.getElementById("resultado").classList.replace("ocultar", "mostrar" )
        document.getElementById("resultado").innerHTML = puntos;
    }
}
