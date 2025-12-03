//Creamos un array de 10 elementos booleanos
let elementos = [true, false, true, true, false, false, true, false, false, true];

//Creamos un contador para llevar un control de las iteraciones
let contador = 0;

//Con un bucle while recorremos el array siempre que el contador sea menor a la longitud del array
while(contador < elementos.length){

    //Guardamos en una variable el indice del proximo elemento true.
    let indice = elementos.indexOf(true, contador);

    //Comprobamos si ha encontrado un true en el array
    if(indice !== -1){
        //Si lo ha encontrado lo mostramos por consola
        console.log(indice);
    }
    //Una vez terminada la iteracion, aumentamos el contador en 1
    contador++;
}