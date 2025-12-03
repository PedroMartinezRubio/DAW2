let usuario = document.getElementById("nombre");
const bye = document.getElementById("abandono");

function write(){
    let mensaje = "Escribe tu nombre";
    prompt(mensaje);
}
function leave(){
    let mensaje = "¿Quieres abandonar el programa?";
    let decision = confirm(mensaje);
    alert(decision);
    console.info("%cFIN DEL PROGRAMA", "color: blue; font-weight: bold; text-decoration: underline;");
}
usuario.addEventListener('click', write);
bye.addEventListener('click', leave);