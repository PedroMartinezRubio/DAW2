let patron = /^[a-záéíóúñ]+$/i;

document.write(patron.test("arbol") + "<br>"); // true
document.write(patron.test("Jesús") + "<br>"); // true
document.write(patron.test("niño") + "<br>"); // true
document.write(patron.test("canción") + "<br>"); // true
document.write(patron.test("1234") + "<br>"); // false
document.write(patron.test("hola123") + "<br>"); // false