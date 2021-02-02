var p;
var comunidades;
var puntos;
var cont;

window.onload = function () {

    puntos = 0;
    p = Array();
    comunidades = Array();
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
    
    let select = document.createElement("select");

    for (let i = 0; i < 17; i++) {
        json.comunidades[i].provincias.forEach(element => {
            let array = Array(element.nombre, json.comunidades[i].nombre);
            p.push(array);
            
        });     
        let option = document.createElement("option");
        option.setAttribute("value", json.comunidades[i].nombre);
        option.appendChild(document.createTextNode(json.comunidades[i].nombre));
        select.appendChild(option);
    }
    for (let i = 0; i < 5; i++) {
        let rnd = Math.floor(Math.random() * p.length);
        let id = p[rnd][1];
        let cont = document.getElementById("contenedorProvincias");

        let selectCoppy = select.cloneNode(true);
        selectCoppy.id = id;
        selectCoppy.addEventListener("blur", comprobar);

        let newDiv = document.createElement("div");
        let texto = document.createElement("div");
        texto.classList.add("cajaTexto");
        texto.appendChild(document.createTextNode(p[rnd][0]));
        newDiv.appendChild(texto);
        newDiv.appendChild(selectCoppy);
        cont.appendChild(newDiv);
        p.splice(rnd, 1);

    }

}

function comprobar() {
    console.log(this.id);
    if (this.value == this.id) {
        this.classList.add("bien");
        document.getElementById("ultima").innerText = 10;
        puntos += 10;
        cont++;
    }else {
        puntos -= 5;
        document.getElementById("ultima").innerText = -5;
    }
    document.getElementById("total").innerText = puntos;
    console.log(cont)

    if (cont == 5) {
        document.getElementById("contenedorPuntos").classList.replace("ocultar", "mostrar")
        document.getElementById("resultado").classList.replace("ocultar", "mostrar" )
        document.getElementById("resultado").innerHTML = puntos;
    }

}