//Crea un programa que indique cual es el elemento mas repetido de un array
//unidimensional y cuantas veces aparece

//Creo el array con los elementos
let array = [2, 3, 5, 7, 7, 8, 5, 7, 2, 6];

//Contador para guardar cuantas veces se repite un numero
let contador;
//Numero para guardar el numero que se repite mas veces
let numero = 0;
//repMax para controlar si el numero actual se ha repetido mas veces que el anterior
let repMax = 0;

//Con el bucle for recorro el array
for(let i = 0; i < array.length; i++){
    //Inicializo el contador a 0 al principio de cada iteracion.
    contador = 0;

    //Un segundo bucle for para comprobar el numero actual con el resto del array
    for(let j = 0; j < array.length; j++){

        //Si el numero actual se repite aumenta el contador
        if(array[i] === array[j]){
            contador++;
        }
    }
    //Compruebo si el contador del numero actual el mayor que el del numero anterior
    if(contador > repMax){
        //Si es mayor, guardo el numero de repeticiones en repMax
        repMax = contador;
        //Si es mayor, guardo el numero que se estaba comprobando
        numero = array[i];
    }
}
//Muestro por pantalla el numero que mas se ha repetico y las veces que lo ha aparecido en el array.
document.write("El numero que mas se repite es: "+numero+" y se repite: "+repMax+" veces.");