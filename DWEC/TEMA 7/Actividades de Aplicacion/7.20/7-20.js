let caja = document.getElementById("caja");
let cuerpo = document.getElementsByTagName("body")[0];
 let posicion;
cuerpo.addEventListener("keydown", (evento)=>{
    if(evento.key === "ArrowRight"){
        posicion = 10+"px";
        caja.style.right -= posicion;
    }else if(evento.key === "ArrowUp"){
        caja.style.top += "10px";
    }else if(evento.key === "ArrowLeft"){
        caja.style.left += "10px";
    }else if(evento.key === "ArrowDown"){
        caja.style.bottom += "10px";
    }else{
        console.log("La tecla pulsada no permite mover la caja");
    }
});