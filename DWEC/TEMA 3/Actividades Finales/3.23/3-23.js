//Crea un programa que detecte cuantos elementos repetidos hay en un array
//unidimensional e indique en que posiciones se encuentra.

//Creo un array de 10 posiciones.
let numeros = new Array(10);

//Recorro el array generando numeros aleatorios
for(let i = 0; i < numeros.length; i++){
    numeros[i] = Math.floor(Math.random()*10);
}

//Lo muestro por consola simplemente para comprobar los numeros en el array
console.table(numeros);

//Pregunta por pantalla que numero quiere buscar
let numRepetido = Number(prompt("Introduce un numero para comprobar si esta repetido:"));

//contador que tiene como funcion indicar desde donde a comienza a buscar la funcion indexOf()
let contador = 0;

//bucle while para comprobar los repetidos
while(contador < numeros.length){

    //Guardo en la variable el indice del numero pasado por el prompt
    let indice = numeros.indexOf(numRepetido, contador);

    //Si encuentra el numero, lo escribe por pantalla.
    if(indice !== -1){
        document.write("El numero: "+numRepetido+" Ya existe y esta en la posicion: "+indice+"<br>");

        //igualo el contador al indice para que empieze a buscar desde la posicion del numero repetido.
        contador = indice+1;
    }

    //aumento el contador al final de la iteracion 
    contador++;
}
