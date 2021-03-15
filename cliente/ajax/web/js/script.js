var selector;
var item = Array();
var dragItem;
var peticionXML;
let mensaje;
let reglas = [
    [2, 3],
    [0, 4],
    [3, 1],
    [4, 1],
    [0, 2]
];
var item ;

window.onload = function() {

    
    selector = document.getElementById("selector");
    item = document.getElementsByClassName("item");
    fetch("mensajes.json")
    .then(respuesta => respuesta.json() )
    .then(data => {
        document.getElementById("continuar").addEventListener("click", comprobar);
        json = data
        console.log(json)
        mensaje = ["pi", "pa", "ti", "la", "sp"];
        peticionXML = new XMLHttpRequest();
        peticionXML.onreadystatechange = mostrar;
        peticionXML.open('GET', 'info.xml', true);
        peticionXML.send(null);
    });
    
    
    

}
function mostrar() {
    if(peticionXML.readyState == 4 && peticionXML.status == 200) {
    //alert(peticionXML.responseText);
    var xmlDoc = peticionXML.responseXML;
    item = xmlDoc.getElementsByTagName("item");
    
    let cont = document.getElementsByClassName("item");
    for (let i = 0; i < item.length; i++) {
        let x = item[i];
        cont[i].id = x.id;
        cont[i].classList.add(i);
        let img = document.createElement("img");
        img.setAttribute("src", x.firstElementChild.innerHTML);
        cont[i].appendChild(img);
        cont[i].addEventListener("dragstart", function(){
            dragItem = this;
        });
    }
    cont[5].addEventListener("dragover", dragOver)
    cont[5].addEventListener("drop", dragDrop)
    }
}


function dragOver(e) {
    e.preventDefault();
}
function dragDrop() {
    dragItem.firstElementChild.classList.add("invisible")
    turno(dragItem.classList[1]);
}

function turno(x) {
    let maquina = parseInt(Math.floor(Math.random() * 5));
    console.log(x + " " + maquina);
    let a = "";
    document.getElementById("proteccion").classList.remove("invisible")
    document.getElementById("deliveracion").classList.remove("invisible")
    setTimeout(function(){ 
        document.getElementById("deliveracion").classList.add("invisible")

        // Yo gano

        if (reglas[x].includes(maquina)) {
            a = mensaje[x]+mensaje[maquina];
            console.log(x + " " + maquina + "tu" +json.mensajes[0][a]);
            document.getElementById("mensaje").querySelector("p").innerHTML = json.mensajes[0][a];
            document.getElementById("mensaje").classList.remove("invisible")
            let b = item[x].getElementsByTagName("puntos")[0].innerHTML;
            for (let i = 0; i < b; i++) {
                let div = document.createElement("div");
                div.classList.add("punto");
                div.classList.add("mio");
                document.getElementById("yo").appendChild(div);
            }
            
        }
        
        // Empate

        else if (x == maquina) {
            document.getElementById("mensaje").querySelector("p").innerHTML = "Empate";
            document.getElementById("mensaje").classList.remove("invisible")
            console.log("empate");
        }
        
        // Maquina gana

        else {
            a = mensaje[maquina]+mensaje[x];
            document.getElementById("mensaje").querySelector("p").innerHTML = json.mensajes[0][a];
            document.getElementById("mensaje").classList.remove("invisible")
            let b = item[maquina].getElementsByTagName("puntos")[0].innerHTML;
            for (let i = 0; i < b; i++) {
                let div = document.createElement("div");
                div.classList.add("punto");
                div.classList.add("suyo");
                document.getElementById("el").appendChild(div);
            }
            console.log("maquina "+json.mensajes[0][a]);
        }
     }, 3000);
    
    
}
function comprobar() {
    document.getElementById("proteccion").classList.add("invisible")
    document.getElementById("mensaje").classList.add("invisible")
    dragItem.firstElementChild.classList.remove("invisible")
    let yo = document.getElementsByClassName("mio");
    let el = document.getElementsByClassName("suyo");
    if (yo.length >= 10) {
        location.reload();
    }
    if (el.length >= 10) {
        location.reload();
    }
}