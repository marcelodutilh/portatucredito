//Variables
const continuar = document.getElementById("continueBtn");



//Listeners
cargarEventListeners();

function cargarEventListeners(){
    //Dispara cuando presiono continuar en la página index.html
    continuar.addEventListener("click",fillEmail);
}


//Funciones

function fillEmail(e){
    e.preventDefault();
    document.getElementById("").innerHTML = window.location.search; 
}

