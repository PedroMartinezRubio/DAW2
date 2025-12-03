//Creamos un mapa vacio
let datos = new Map();

//Creamos 10 elementos con mapa.set() con su clave(numero) y su valor(nombre)
datos.set(61232189, "Pedro");
datos.set(698521478, "Sergio");
datos.set(685632145, "Pedro Miras");
datos.set(62542333, "Marta");
datos.set(635479821, "Adrian");
datos.set(645689741, "Maria");
datos.set(65896321, "Miriam");
datos.set(678965321, "Ana");
datos.set(663214589, "Juan");
datos.set(654789321, "Alicia");

//Recorremos el mapa con un for each
for (let [numero, nombre] of datos) {
    console.log("El numero: "+numero+". Pertenece a la persona: "+nombre);
}
console.log("--------------------------------------");
console.log("Cambio el nombre de la tercera persona");
console.log("--------------------------------------");

//Machacamos un elemento cambiandole el nombre
datos.set(685632145, "Antonietta");

//Mostramos el mapa para confirmar que el elemento anterior ha cambiado de valor.
for (let [numero, nombre] of datos) {
    console.log("El numero: "+numero+". Pertenece a la persona: "+nombre);
}