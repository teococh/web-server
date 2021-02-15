var selector;
var item = Array();
var dragItem;
let figuras = [
    "./img/piedra.png",
    "./img/papel.png",
    "./img/tijeras.png",
    "./img/lagarto.png",
    "./img/spock.png"
];
let mensaje = ["pi", "pa", "ti", "la", "sp"];
let reglas = [
    [3, 2],
    [0, 4],
    [3, 1],
    [4, 1],
    [0, 4]
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
    let info = fetch("info.xml")
    .then(respuesta => respuesta.text() )
    .then(data => {
        json = data
        return json;
    });
    console .log(info)
    print();

}

function print() {
    
    
    for (let i = 0; i < item.length-1; i++) {
        item[i].id = i;
        let img = document.createElement("img");
        img.setAttribute("src", figuras[i]);
        item[i].appendChild(img);

        item[i].addEventListener("dragstart", function(){
            dragItem = this;
        });
    }
    item[5].addEventListener("dragover", dragOver)
    item[5].addEventListener("drop", dragDrop)

}

function dragOver(e) {
    e.preventDefault();
}
function dragDrop() {
    turno(dragItem.id);
}

function turno(x) {
    let maquina = parseInt(Math.floor(Math.random() * 5));
    console.log(maquina);
    let a = "";
    if (reglas[maquina][0] == x || reglas[maquina][1] == x) {
        a = mensaje[maquina]+mensaje[x];
        alert(json.mensajes[0][a]);
        console.log("tu");
    }else if (reglas[maquina][0] == reglas[x][0] || reglas[maquina][1] == reglas[x][1]) {
        alert("empate");
    }
    
    else {
        a = mensaje[x]+mensaje[maquina];
        alert(json.mensajes[0][a]);
        console.log("maquina");
    }
    
}
