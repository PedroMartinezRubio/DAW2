let b = document.getElementById("bttn");
let cambiado = false;
function cambiarColor(){
    const p = document.getElementById("parrafo");
    
    if(cambiado){
        p.style.color = "";  
    }else{
        p.style.color = "red";
    }

    cambiado = !cambiado;
}

b.addEventListener("click", cambiarColor);