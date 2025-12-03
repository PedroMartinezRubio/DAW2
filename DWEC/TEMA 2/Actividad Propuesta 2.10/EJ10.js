function pasaletra(){
    let letra = prompt("Introduce una letra");
    while(letra != "s"){
        console.log("No ha habido suerte. Prueba otra vez");
        letra = prompt("Introduce una letra");
    }
    console.log("Enhorabuena. Has acertado!");
}
