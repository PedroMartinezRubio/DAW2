//Creo un array de 10 posiciones
let numeros = Array(10);

for (let i = 0; i < numeros.length; i++) {
    //Asigno un numero aleatorio entre 0 y 100 que sea multiplo de 5
    numeros[i] = Math.floor(Math.random()*21) * 5;
    
    //Comprueba si el primer numero es menor que 50
    //Si es menor, genera un numero aleatorio hasta que sea mayor que 50.
    while(numeros[0] < 50){

        //Elimino el numero en la primera posicion
        numeros.shift();

        //Genemor otro numero aleatorio multiplo de 5 y lo inserto en la primera posicion
        numeros.unshift(Math.floor(Math.random()*21) * 5);
    }

    //Comprueba si el ultimo numero es mayor que 50
    //Si es mayor, genero un numero aleatorio hasta que sea mayor que 50.
    while(numeros[numeros.length-1] > 50){

        //Elimino el numero en la ultima posicion
        numeros.pop();

        //Genero otro numero aleatorio multiplo de 5 y lo inserto en la ultima posicion
        numeros.push(Math.floor(Math.random()*21) * 5);
    }

}

//Muestro el array por consola en forma de tabla
console.table(numeros);