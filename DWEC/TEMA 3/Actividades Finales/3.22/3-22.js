//Creamos un array de 10 elementos
let numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//Creamos un bucle for para recorrer el array 
for(let i = 0; i < numeros.length; i++){

    //Comprobamos que el numero sea multiplo de 3
    if(numeros[i] % 3 == 0){
        //Si lo es, lo mostramos por pantalla
        document.write(numeros[i]+"<br>");
    }
}