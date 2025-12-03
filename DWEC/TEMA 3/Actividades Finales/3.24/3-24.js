//Escribe un programa que realice una copia manual de un array unidimensional.

//Creo un array
let array = [1, 2, 3, 4, 8, 6, 9, "mariano"];

//Creo un segundo array que va a ser la copia
let arrayCopia = new Array();

document.write("Primer array: <br>");

//Con un bucle for recorro el primer array
for(let i = 0; i < array.length; i++){
    //introduzco en el segundo array el valor del primer array de la posicion i
    arrayCopia.push(array[i]);
    document.write(array[i]+" ");
}
document.write("<br>");
document.write("Copia del array: <br>");

//Creo un segundo bucle for para recorrer el segundo array y mostrar sus elementos por pantalla
for(let i = 0; i < arrayCopia.length; i++){
    document.write(arrayCopia[i]+" ");
}