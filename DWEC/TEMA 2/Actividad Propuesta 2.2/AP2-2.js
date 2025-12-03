let nombre = document.getElementById("nombre");
let correo = document.getElementById("correo");
let dni = document.getElementById("dni");
let contenedor = document.getElementById("contenedor");
let boton = document.getElementById("boton");

function mostrarDatos() {
    nombre.innerHTML = 'Pedro Martinez Rubio';  
    correo.innerHTML = 'jhfdsafdsa@Ymail.com';
    dni.innerHTML = '1263523165X';
}
function reseteo(){
    nombre.innerHTML = "Nombre completo";
    correo.innerHTML = "Correo electronico";
    dni.innerHTML = "DNI";
    contenedor.style.display = 'none';
}
function show(){
    contenedor.style.display = 'block';
}