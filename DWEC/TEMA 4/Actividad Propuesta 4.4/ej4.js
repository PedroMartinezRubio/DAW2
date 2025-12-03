const invertida = function (palabra){
    //Variable donde se almacenara la palabra invertida
    let palabraInv = "";
    //Bucle for para recorrer la palabra pasada por parametros
    //Se recorre la palabra desde la ultima posicion a la primera
    for(let i = palabra.length -1; i >= 0; i--){
        //Se guarda cada letra de la palabra en la nueva variable
        palabraInv += palabra[i];
    }
    //muestro la palabra por pantalla
    document.write(palabraInv);
}
//Se llama a la variable que almacena la funcion
invertida("cachibache");