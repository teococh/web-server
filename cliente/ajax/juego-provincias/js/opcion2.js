var a;
let div;
let json;

window.onload = function () {

    // inicializar variables
    div = document.getElementById("contenedor");

    // a es un array con numeros del 0 al 15
    a = Array();
    for (let index = 1; index < 17; index++) {
        a.push(index);
    }

    fetch("js/provincias.json")
    .then(respuesta => respuesta.json() )
    .then(data => {
        json = data
        console.log(json)
        for (let index = 0; index < 16; index++) {
            let rnd = Math.floor(Math.random() * a.length);
            pintarDiv(rnd);
            a.slice(rnd);
        }
    });
    
    
    // hago una eleccion de numeros random usando a para no repetir valores
    

}

function pintarDiv (x){

    let newDiv = document.createElement("div");
    let bandera = document.createElement("img");
    bandera.setAttribute("src", json.comunidades[x].bandera);
    newDiv.classList.add("bandera");
    newDiv.innerHTML = json.comunidades[x].nombre;
    newDiv.appendChild(bandera);
    div.appendChild(newDiv);
}


