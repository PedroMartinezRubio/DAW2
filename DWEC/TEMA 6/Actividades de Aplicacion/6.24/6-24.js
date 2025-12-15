let filas = prompt("Introduce la cantidad de filas que tenga la columna:");
let columnas = prompt("Introduce el numero de columnas de la tabla:");

let tabla = document.createElement("table");
for(let i = 0; i < filas; i++){
    let f = document.createElement("tr");
    for(let j = 0; j < columnas; j++){
        let c = document.createElement("td");
        let num = document.createTextNode(Math.random() * 10);
        
        c.appendChild(num);
        f.appendChild(c);
    }
    tabla.appendChild(f);
}