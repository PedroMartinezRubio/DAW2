function esMultiplo(num){
    let resultado = `El numero ${num} no es multiplo de 10`;
    if(num % 10 == 0){
        resultado = `El numero ${num} es multiplo de 10`;
    }

    return resultado;
}

document.write(esMultiplo(20));