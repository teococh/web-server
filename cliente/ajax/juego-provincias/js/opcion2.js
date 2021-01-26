var a;

window.onload = function () {

    a = Array();
    for (let index = 0; index < 51; index++) {
        
        a.push(index);

    }

}

function pintarDiv (){

}

function datos(x) {
    fetch("./js/provincias.json")
    .then(respuesta => respuesta.json() )
    .then(respuesta => console.log(respuesta["comunidades"][x]["nombre"]))
}