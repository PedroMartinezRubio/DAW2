let caja = document.getElementById("caja");
let cuerpo = document.getElementsByTagName("body")[0];
let posicion;


cuerpo.addEventListener("keydown", (evento)=>{

    let left = parseInt(caja.style.left) || 0;
    let top = parseInt(caja.style.top) || 0;

    if(evento.key === "ArrowRight"){
        caja.style.left = left + 10 + "px";
    }else if(evento.key === "ArrowUp"){
        caja.style.top = top - 10 + "px"; 
    }else if(evento.key === "ArrowLeft"){
        caja.style.left = left - 10 + "px";  
    }else if(evento.key === "ArrowDown"){
        caja.style.top = top + 10 + "px";
    }else{
        console.log("La tecla pulsada no permite mover la caja");
    }
});