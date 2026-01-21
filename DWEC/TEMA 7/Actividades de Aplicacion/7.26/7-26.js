function crearTarjeta(){
    let cuerpo = document.getElementsByTagName("body")[0];

    cuerpo.style.textAlign = "center";
    cuerpo.style.marginTop = "50px";
    cuerpo.style.backgroundColor = "lightgray";
    cuerpo.style.padding = "20px";
    cuerpo.style.boxSizing = "border-box";
    cuerpo.style.width = "100%";
    cuerpo.style.height = "100vh";
    cuerpo.style.display = "grid";
    cuerpo.style.gridTemplateColumns = "auto auto auto auto auto";
    cuerpo.style.justifyContent = "center";
    cuerpo.style.alignItems = "center";
    
    let tarjeta = document.createElement("div");
    tarjeta.style.width = "100px";
    tarjeta.style.height = "100px";
    tarjeta.style.backgroundColor = "black";
    tarjeta.style.margin = "5px";
    tarjeta.style.display = "inline-block";
    tarjeta.style.cursor = "pointer";
    tarjeta.setAttribute("draggable", "true");

    

    cuerpo.appendChild(tarjeta);
};

for(let i = 0; i < 6; i++){
    for(let j = 0; j < 5; j++){
        crearTarjeta();
    }
}

let colores = ["red", "blue", "green", "yellow", "purple", "orange", "pink", "brown", "cyan", "magenta", "lime", "teal", "navy", "maroon", "olive"];

colores = colores.concat(colores);

let tarjetas = document.querySelectorAll("div");

tarjetas.forEach(tarjeta => {
    let indiceAleatorio = Math.floor(Math.random() * colores.length);
    let colorAleatorio = colores[indiceAleatorio];
    tarjeta.style.backgroundColor = colorAleatorio;

    colores.splice(indiceAleatorio, 1);
    
});

tarjetas.forEach(tarjeta => {
    tarjeta.addEventListener("dragstart", (evento)=>{
        evento.dataTransfer.setData("colorCaja", evento.target.style.backgroundColor);
        
    });

    tarjeta.addEventListener("drop", (evento)=>{
        evento.preventDefault();
        let colorCajaOrigen = evento.dataTransfer.getData("colorCaja");
        let colorCajaDestino = evento.target.style.backgroundColor;
        evento.target.style.backgroundColor = colorCajaOrigen;
        let tarjetaOrigen = Array.from(tarjetas).find(tarjeta => tarjeta.style.backgroundColor === colorCajaOrigen && tarjeta.style.opacity === "0.5");
        if(tarjetaOrigen){
            tarjetaOrigen.style.backgroundColor = colorCajaDestino;
            
        }
    });
});

