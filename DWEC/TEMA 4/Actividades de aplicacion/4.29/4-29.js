//Se crea un array de 10 elementos
let elementos = Array(10);

function orden(elementos){
    //Con un bucle for se le asigna a cada posicion del array un elemento aleatorio entre 0 y 100
    for(let i = 0; i < elementos.length; i++){
        elementos[i] = Math.floor(Math.random()*101);
    }
    
    //Aqui se crea un segundo sort() para colocar los elementos que terminan en 0 al principio del array
    elementos.sort((primero, segundo) =>{
        //Se comprueba si el primer numero termina en 10
        if(primero % 10 === 0 && segundo % 10 !== 0){
            return -1;
        }
        //Se comprueba si el segundo numero termina en 0
        if(segundo % 10 === 0 && primero % 10 !== 0){
            return 1;
        }
        //Se ordenan los numeros de menor a mayor.
        return primero - segundo;
    }
    );

    return elementos;
}

document.write(orden(elementos));