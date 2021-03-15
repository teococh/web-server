//Declaraciónn de variables Globales

//Variable donde guardaremos los índices aleatorios que harán referencia a las cartas con las que jugará el jugador
let playerCards = [];

//Variable donde guardaremos losd índices aleatorios que harán referencia a las cartas con las que jugará la máquina
let machineCards = [];

//Contenedor de las cartas ganadas por el jugador

let cartasPlayer;

//Contenedor de las cartas ganadas por la máquina
let cartasMachine;

//Contenedor con la puntuación total del jugador
let totalPlayer;

//Contenedor con la puntuación total de la máquina
let totalMachine;

//Reportero
let rep;

//Número de cartas con las que se juega.
let cartasJugada = 5;

//Todos los pokemon (JSON)
let totalPokemons;

//Contenedor con la zona de juego
let tablero;

//Contendor con las cartas de la máquina
let tableroMachine;

//Contenedor con las cartas del jugador
let tableroPlayer;

//Contendor con la zona de juego del jugador
let jugadaPlayer;

//Contenedor con la zona de juego de la máquina
let jugadaMachine;

//Cartel final con el resultado
let cartel;

//Para la elección de quien empieza
let players = ["machine", "player"];

//Turno de cada mano
let turno = "";

// json
let datos;

window.onload = function() {
    //Asignamos los elementos HTML que vamos a utilizar
    cartel = document.getElementById("cartel");
    cartel.classList.add("ocultar");
    tablero = document.getElementById("play");
    jugadaPlayer = document.getElementById("jugadaPlayer");
    jugadaMachine = document.getElementById("jugadaMachine");
    tableroMachine = document.getElementById("machine");
    tableroPlayer = document.getElementById("player");
    cartasPlayer = document.getElementById("cartasPlayer");
    cartasMachine = document.getElementById("cartasMachine");
    totalPlayer = document.getElementById("totalPlayer");
    totalMachine = document.getElementById("totalMachine");
    rep = document.getElementById("reportero");

    //Elegimos turno RANDOM
    turno = elegirTurno();


    
    //Cargamos el JSON con todos los POKEMON
    cargarPokemons(numeroPokemons())
    
    
}

async function numeroPokemons() {
  	
    let x = await fetch("https://pokeapi.co/api/v2/pokemon");
    x = await x.json()
    return await x.count;
    
}



//Función para la elección del jugador que empieza
function elegirTurno() {
    //Calculamos quién empieza de forma aleatoria
    return players[Math.floor(Math.random() * 2)];
}

//Función para cargar los pokemon
async function cargarPokemons(cantidad) {
    
    let n = await cantidad;
    console.log(n)
    let pokimone = await fetch("https://pokeapi.co/api/v2/pokemon/?limit="+n);
    pokimone = await pokimone.json();
    console.log(pokimone)
    
}

//Función para repartir los POKEMON entre los dos jugadores (máquina y jugador)
function repartirCartas() {
    //Repartirmos las cartas de forma aleatoria entre los jugadores
    
}

//FUnción que obtiene la información de cada uno de los POKEMON elegidos
async function cargarCartas(a) {
    //Obtenemos la información de todos los POKEMON calculados aleatoriamente, y guardamos la información en el mismo array
    //donde guardamos los números aleatorios.
       	/*********************************
	*******	//A COMPLETAR  ***********
	*********************************/
    console.log(totalPokemons)
    for (let i = 0; i < totalPokemons.results.length; i++) {
        let carta = await (await fetch(totalPokemons.results[i].url)).json();
        playerCards.push(carta)
    }
}

//Función para construir las cartas con la información obtenidoa
function pintarCartas() {
       	/*********************************
	*******	//A COMPLETAR  ***********
	*********************************/    
    //Empezamos la partida
    empezarJugada();
}

//Función para la creación de cada carta
//info: información JSON del POKEMON con el que crearemos la carta
//tapada: indica, con true o false, si la carta tendrá el dorso (carta de la máquina)
function crearCarta(info, tapada) {
    //Creamos el contenedor de cada carta con la clase "carta"
    let carta = document.createElement("div");
       	/*********************************
	*******	//A COMPLETAR  ***********
	*********************************/
    return carta;
}

//Empezamos la partida
function empezarJugada() {
    //Si el turno es del jugador, simplemente añadimos el texto correspondiente al reportero
    if(turno == "player") reportero("¡Tu turno!");
    else {
        //Si el turno es de la máquina, cambiamos el texto al reportero, y lanzamos la función turnoMachine en 1000 ms
        reportero("Juega la máquina...",true);
        setTimeout(turnoMachine, 1000);
    }
}

//Turno del jugador
function turnoPlayer() {
    //Mostramos el cartel "¡Tu turno!" en el reportero
    reportero("¡Tu turno!");
    //Colgamos la carta seleccionada por el jugador (doble click), en jugadaPlayer
    jugadaPlayer.appendChild(this);

    if (turno == "player") {
        //Si ha empezado el jugador, ponemos el texto "Juega la máquina" en el reportero
        reportero("Juega la máquina...",true);
        //Lanzamos la función turnoMachine en 1000 ms
        setTimeout(turnoMachine,1000);
    } else {
        //Si ha empezado la máquina, ya estarán las dos cartas en el tablero
        reportero("Deliverando...",true);
        setTimeout(comprobarGanador, 3000);
    }
}

//Fnción reportero, le pasamos un texto, y si queremos imagen de carga o no (true o false)
function reportero(texto,img) {
    rep.innerText = "";
    if (img) {
        let img = document.createElement("img");
        img.src = "img/progress.gif";
        rep.appendChild(img);
    }
    let t = document.createTextNode(texto);
    rep.appendChild(t);
}

//Simulamos cuando es el turno de la máquina
function turnoMachine() {
	//A COMPLETAR
}

//Función para comprobar lo que hay en el tablero
function comprobarGanador() {
    //Obtenemos los puntos de la carta que ha jugado el jugador y la máquina
	//A COMPLETAR
    //let puntosPlayer = ?
    //let puntosMachine = ?

    //Si la máquina ha ganado la mano
    if (puntosMachine > puntosPlayer ) {
        //GANA MACHINE
        //Colocamos ambas cartas en el elemento cartasMachine
       	/*********************************
	*******	//A COMPLETAR  ***********
	*********************************/
        //cartasMachine.appendChild(?);
        //cartasMachine.appendChild(?);
        //Sumamos los puntos al total de la máquina (totalMachine)
        totalMachine.innerText = parseInt(totalMachine.innerText) + puntosPlayer + puntosMachine;
        //Indicamos que le toca empezar la siguiente mano a la máquina
        turno = "machine";
    //Si el jugador ha ganado la mano
    } else if (puntosMachine < puntosPlayer) {
        //GANA PLAYER
        //Colocamos ambas cartas en el elemento cartasPlayer
        /*********************************
	*******	//A COMPLETAR  ***********
	**********************************/
        //cartasPlayer.appendChild(?);
        //cartasPlayer.appendChild(?);
        //Sumamos los puntos al total del jugador (totalPlayer)
        totalPlayer.innerText = parseInt(totalPlayer.innerText) + puntosPlayer + puntosMachine;
        //Indicamos que le toca empezar la siguiente mano al jugador
        turno = "player";
    } else {
        //EMPATE
        //EN caso de empato, la carta del jugador va a cartasPlayer, y la de la máquina a cartasMachine
       	/*********************************
	*******	//A COMPLETAR  ***********
	*********************************/
        //cartasPlayer.appendChild(?]);
        //cartasMachine.appendChild(?);
        //Sumamos los puntos de cada una a sus totales
        totalPlayer.innerText = parseInt(totalPlayer.innerText) + puntosPlayer;
        totalMachine.innerText = parseInt(totalMachine.innerText) + puntosMachine;
    }
    //COMPROBAMOS SI HEMOS LLEGADO AL FINAL DE LA PARTIDA
    //Si hemos llegado al final de la partida
        //Uno de los dos ha superado los 1000 puntos
        //Hemos jugado todas las cartas
    if ((tableroMachine.getElementsByClassName("carta").length == 0) || totalPlayer.innerText >= 1000 || totalMachine.innerText >= 1000) {
        finalPartida();
    //Si no hemos llegado al final de la partida y el turno es de la máquina
    } else if (turno == "machine") {
        //Mostramso el cartel en el reportero
        reportero("Juega la maquina...",true);
        //Lanzamos turnoMachine en 1000 ms
        setTimeout(turnoMachine,1000);
    //Si no hemos llegado al final de la partida y el turno es del jugador
    } else {
        //Ponemos el cartel en el reportero
        reportero("¡Tu turno!");
    }
}

//La partida ha finalizado
function finalPartida() {
    //Ocultamos al reportero
    rep.classList.add("ocultar");

    //Obtenemos los puntos de la máquina y del jugador
    let puntosPlayer = parseInt(totalPlayer.innerText);
    let puntosMachine = parseInt(totalMachine.innerText);

    //Si gana la máquina ponemos en el cartel "GANA LA MÁQUINA"
    if (puntosMachine > puntosPlayer) cartel.innerText = "GANA LA MÁQUINA";
    //Si gana el jugador ponemos en el cartel "TÚ GANAS"
    else if (puntosMachine < puntosPlayer) cartel.innerText = "TÚ GANAS"
    //En caso de empate ponemos en el cartel "EMPATE"
    else cartel.innerText = "EMPATE";

    //Mostramos el cartel
    cartel.classList.remove("ocultar");
}

