let cuerpo = document.getElementsByTagName("body")[0];

let titulo = document.createElement("h1");
titulo.textContent = "Lista de Tareas";
cuerpo.appendChild(titulo);

let lista = document.createElement("ul");

cuerpo.appendChild(lista);

let boton = document.createElement("button");
boton.textContent = "Añadir elemento";
cuerpo.appendChild(boton);

let botonOrden = document.createElement("button");
botonOrden.textContent = "Ordenar lista";
cuerpo.appendChild(botonOrden);

boton.addEventListener("click", ()=> {
    let tarea = document.createElement("li");
    let texto = prompt("Introduce el texto de la nueva tarea:");
    
    let aspa = document.createElement("span");
    aspa.textContent = "X";
    aspa.style.cursor = "pointer";
    aspa.style.margin = "10px";

    aspa.addEventListener("click", () => {
        lista.removeChild(tarea);
    });

    tarea.textContent = texto;
    tarea.appendChild(aspa);

    lista.appendChild(tarea);
});

botonOrden.addEventListener("click", ()=>{
    let elementos = Array.from(lista.getElementsByTagName("li"));
    elementos.sort((a, b) => a.textContent.localeCompare(b.textContent));
    lista.innerHTML = "";
    elementos.forEach(elemento => lista.appendChild(elemento));
});