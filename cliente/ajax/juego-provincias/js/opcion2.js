var a;
let div;
let json;
let select;
const acierto = 50;
var fallos;
var aciertos;

window.onload = function () {

    // inicializar variables
    div = document.getElementById("contenedor");
    select = Array();
    fallos = 1;
    aciertos = 0;

    // a es un array con numeros del 0 al 17
    a = Array();
    for (let index = 1; index < 18; index++) {
        a.push(index);
    }

    fetch("js/provincias.json")
    .then(respuesta => respuesta.json() )
    .then(data => {
        json = data
        console.log(json)
        for (let index = 0; index < 18; index++) {
            let rnd = Math.floor(Math.random() * a.length);
            pintarDiv(a[rnd]);
            a.splice(rnd, 1);
            
        }
    });
    

}

function pintarDiv (x){



    let newDiv = document.createElement("div");
    let bandera = document.createElement("img");
    let todas = document.createElement("select");
    let primer = document.createElement("option");


    primer.setAttribute("value", "-1");
    t = document.createTextNode("Elige");
    primer.appendChild(t);
    todas.appendChild(primer);


    for (let i = 0; i < 18; i++) {
        let option = document.createElement("option");
        option.setAttribute("value", i);
        t = document.createTextNode(json.comunidades[i].nombre);
        option.appendChild(t);
        todas.appendChild(option);
    }


    bandera.setAttribute("src", json.comunidades[x].bandera);
    newDiv.classList.add("bandera");
    newDiv.id = x;
    newDiv.appendChild(bandera);
    div.appendChild(newDiv);
    // Event listener Aqui
    todas.addEventListener("change", cosa);
    newDiv.appendChild(todas);
}


function cosa() {
    console.log(this.value)
    if (this.value == -1) {
        this.classList.remove("bien");
        this.classList.remove("mal");
    }
    else if (this.value != this.parentNode.id) {
        this.classList.remove("bien");
        this.classList.add("mal");
        // Esto es una tremenda mierda REVISALO
        document.getElementById("total").innerHTML = parseInt(document.getElementById("total").innerHTML) - fallos*10;
        fallos++;
    }else {
        this.classList.remove("mal");
        this.classList.add("bien");
        document.getElementById("total").innerHTML = parseInt(document.getElementById("total").innerHTML) + 50;
        fallos = 1;
    }
    if (aciertos >= 17) {
        document.getElementById("contenedorPuntos").classList.remove("ocultar");
        document.getElementById("resultado").classList.remove("ocultar");
    }
}