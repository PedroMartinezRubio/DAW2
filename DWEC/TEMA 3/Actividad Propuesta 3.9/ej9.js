//Creamos un mapa vacio de personas
let personas = new Map();

//Creamos 5 elementos dentro del mapa con su clave y valor
personas.set("Nombre1", "David");
personas.set("Nombre2", "Raul");
personas.set("Nombre3", "Juan");
personas.set("Nombre4", "Pedro");
personas.set("Nombre5", "Dani");

//Creamos un array vacio para almacenas los nombres
let array = new Array();

//creamos un for each para recorrer el mapa
for(let [clave, valor] of personas){
    //Por cada elemento del mapa, metemos el valor(nombre) en el array
    //Esto crea un array de 5 elementos. Cada posicion es el nombre de cada persona que hay en el mapa
    array.push(valor);
}

//Con array.sort() ordenamos el array de forma alfbetica
array.sort();

//Otro for each para escribir por pantalla cada elemento del array.
for(let nombre of array){
    document.write(nombre+"<br>");
}