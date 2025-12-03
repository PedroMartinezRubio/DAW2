function pasaletra(){
    let letra;
    do{
        letra = prompt("Introduce una letra");
        if(letra != "s"){
            console.log("No ha habido suerte. Prueba otra vez");
        }
    }while(letra != "s")
    console.log("Enhorabuena. Has acertado!");
}
