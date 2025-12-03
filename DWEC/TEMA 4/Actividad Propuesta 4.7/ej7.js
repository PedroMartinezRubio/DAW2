const palabras = ["Adios", "Camión", "Cerveza", "Patrón", "Tizón"];

function palabrasFiltradas(palabras){
    //Creo un array con las vocales con tilde
    const tilde = ["á", "é", "í", "ó", "ú"];

    //Guardo en la variable filtradas un array con las palabras filtradas
    const filtradas = palabras.filter(palabra => 
        //En este caso filter tiene una funcionalidad parecida a los ternarios.
        //El bucle for..of seria la primera condicion, si se cumple(encuentra la vocal con tilde), se hace el return false
        //Y si no se cumple (No encuentra la vocal con tilde), al salir del for..of hace return true;
        //Los return sirven para el filter, si devuelve false no añade la palabra en filtradas y si es true si la añade.
        {   
            //Recorro el array de vocales con tilde
            for (const letra of tilde) {
                //Compruebo si la vocal con tilde se encuentra en cada letra del array palabras
                if(palabra.includes(letra)){
                    return false;
                }
            }
            return true;
        });
    //Al final del filter, devuelvo el array filtradas con las palabras sin tildes
    return filtradas;
}

document.write(palabrasFiltradas(palabras));
