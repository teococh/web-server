var selector;
var item = Array();
let figuras = [
    "./img/piedra.png",
    "./img/papel.png",
    "./img/tijeras.png",
    "./img/lagarto.png",
    "./img/spock.png"
];

window.onload = function() {

    selector = document.getElementById("selector");
    item = document.getElementsByClassName("item");
    fetch("mensajes.json")
    .then(respuesta => respuesta.json() )
    .then(data => {
        json = data
        console.log(json)
    });
    print();

}

function print() {
    
    
    console.log(figuras[0])
    for (let i = 0; i < item.length-1; i++) {
        item[i].id = i;
        let img = document.createElement("img");
        img.setAttribute("src", figuras[i]);
        item[i].appendChild(img);
    }

}