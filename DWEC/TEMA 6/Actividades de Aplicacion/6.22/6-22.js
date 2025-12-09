let tiempoEnSegundos = 60*30;

let nombre = prompt("Introduce tu nombre");
let edad = prompt("Introduce tu edad");

document.cookie = `nombre=${nombre}; edad=${edad};max-age=${tiempoEnSegundos}`;