let cuerpo = document.getElementsByTagName("body")[0];

let parrafo = document.createElement("p");

cuerpo.appendChild(parrafo);

cuerpo.addEventListener("keydown", (evento)=>{
    let texto = "";
    parrafo.textContent += texto + evento.key;
});

let boton = document.createElement("button");
boton.textContent = "Limpiar parrafo";
cuerpo.appendChild(boton);

boton.addEventListener("click", ()=>{
    parrafo.textContent = "";
});