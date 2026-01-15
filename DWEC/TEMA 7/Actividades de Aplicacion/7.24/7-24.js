let parrafo = document.getElementById("p");
let texto = parrafo.textContent
let bA = document.getElementById("a");
let bE = document.getElementById("e");
let bI = document.getElementById("i");
let bO = document.getElementById("o");
let bU = document.getElementById("u");

bA.addEventListener("click", () => {
    let nuevoTexto = texto.replace(/a/gi, "");
    parrafo.textContent = nuevoTexto;
});

bE.addEventListener("click", () => {
    let nuevoTexto = texto.replace(/e/gi, "");
    parrafo.textContent = nuevoTexto;
});

bI.addEventListener("click", () => {
    let nuevoTexto = texto.replace(/i/gi, "");
    parrafo.textContent = nuevoTexto;
});

bO.addEventListener("click", () => {
    let nuevoTexto = texto.replace(/o/gi, "");
    parrafo.textContent = nuevoTexto;
});

bU.addEventListener("click", () => {
    let nuevoTexto = texto.replace(/u/gi, "");
    parrafo.textContent = nuevoTexto;
});