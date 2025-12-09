let anchura = prompt("Escribe la anchura de la caja");
let altura = prompt("Escribe la altura de la caja");
let borderColor = prompt("Indica el color del border de la caja");

let caja = document.getElementsByTagName("div")[0];

caja.dataset.anchura = anchura+"px";
caja.dataset.altura = altura+"px";
caja.dataset.bordercolor = borderColor;

caja.style.width = anchura+"px";
caja.style.height = altura+"px";
caja.style.border = "1px solid "+borderColor;