//Escribe las instrucciones necesarias para mostrar en pantalla un array con este contenido: 
//[[21, 2, 3, 4], [45, 32, 22, 9], [0, 66, 7, 4], [-3, 23, 11, 90], [59, -2, -63, 15]]

let arrayBi = [[21, 2, 3, 4], [45, 32, 22, 9], [0, 66, 7, 4], [-3, 23, 11, 90], [59, -2, -63, 15]];

//Creo un bucle for para recorrer el array
for(let i = 0; i < arrayBi.length; i++){
    //Escribo por pantalla cada elemento del array
    document.write(arrayBi[i]+"<br>");
}