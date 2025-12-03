let numeros = [2, 5, 8, 3, 4, 6];

function operaciones(numeros){
    document.write("Suma de los numeros: "+suma(numeros) + "<br>");
    document.write("Media de los numeros: "+media(numeros).toFixed(2) + "<br>");
    document.write("Multiplicacion del primer y ultimo numero: "+multi(numeros) + "<br>");
    document.write("Division del segundo y penultimo numero: "+divi(numeros));
}

function suma(numeros){
    let resultado = 0;
    for(let i = 0; i < numeros.length; i++){
        resultado += numeros[i];
    }

    return resultado;
}

function media(numeros){
    let media = suma(numeros) / numeros.length;
    return media;
}

function multi(numeros){
    let resultado = numeros[0] * numeros[numeros.length-1];
    return resultado;
}

function divi(numeros){
    let resultado  = numeros[1] / numeros[numeros.length-2];
    return resultado;
}

operaciones(numeros);