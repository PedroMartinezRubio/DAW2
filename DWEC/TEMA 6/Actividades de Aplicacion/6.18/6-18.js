function ingresarFila(){
    let nuevaFila = document.createElement("tr");
    let nuevaCelda = document.createElement("td");
    nuevaCelda.textContent = "Nueva fila";

    let tabla = document.getElementsByTagName("table")[0];

    nuevaFila.appendChild(nuevaCelda);
    tabla.appendChild(nuevaFila);
    
}

let boton = document.getElementsByTagName("button")[0];

boton.addEventListener("click", ingresarFila);