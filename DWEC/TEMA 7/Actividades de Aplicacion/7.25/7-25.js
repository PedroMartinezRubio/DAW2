let cuerpo = document.getElementsByTagName("body")[0];
let caja1 = document.createElement("div");
caja1.style.width = "10px";
caja1.style.height = "40px";
caja1.style.backgroundColor = "green";

let caja2 = document.createElement("div");
caja2.style.width = "10px";
caja2.style.height = "40px";
caja2.style.backgroundColor = "red";

cuerpo.appendChild(caja1);
cuerpo.appendChild(caja2);

const ancho = 5;

cuerpo.addEventListener("keydown", (evento)=>{
    let anchoActual = parseInt(caja1.style.width);
    if(evento.key === "a"){
        caja1.style.width = anchoActual + ancho + "px";
    }
    let anchoActual2 = parseInt(caja2.style.width);
    if(evento.key === "ñ"){
        caja2.style.width = anchoActual2 + ancho + "px";
    }

    if(caja1.style.width === "500px" && caja2.style.width < "500px"){
        cuerpo.innerHTML = "<h1 style='color: green;'>GANA VERDE</h1>";
        evento.preventDefault();
    }else if(caja2.style.width === "500px" && caja1.style.width < "500px"){
        cuerpo.innerHTML = "<h1 style='color: red;'>GANA ROJO</h1>";
        evento.preventDefault();
    }
});

