let imagenes = document.getElementsByClassName("num");
let oculto = document.getElementById("img-oculto");
let jsImagen = document.getElementById("js");
let contenedor = document.getElementById("img-container");

oculto.style.visibility = "hidden";
contenedor.focus();

contenedor.addEventListener("keydown", (e)=>{
    
    let tecla = Number(e.key);

    if(imagenes[tecla]){
        ocultar(imagenes);
        imagenes[tecla].style.visibility = "visible";
        jsImagen.style.visibility = "hidden";
    }else{
        jsImagen.style.visibility = "visible";
        ocultar(imagenes);
    }
    
});

function ocultar(imagenes){
    for(let i = 0; i < imagenes.length; i++){
        imagenes[i].style.visibility = "hidden";
    }

}