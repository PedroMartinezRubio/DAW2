//Crea un programa que convierta el array de la actividad anterior en un array unidimensional.

let arrayBi = [[21, 2, 3, 4], [45, 32, 22, 9], [0, 66, 7, 4], [-3, 23, 11, 90], [59, -2, -63, 15]];
let arrayUni = new Array();

//Creo un bucle for anidado dentro de otro for para recorrer el array bidimensional
for(let i = 0; i < arrayBi.length; i++){
    for(let j = 0; j < 4; j++){
        //introduzco en el array unidimensional todos los valores del array bidimensional
        arrayUni.push(arrayBi[i][j]);
    }
}
document.write(arrayUni);