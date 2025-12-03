//Escribe un programa para comprobar si dos arrays unidimensionales contiene los mismos elementos
//Creo dos arrays de numeros
let array1 = [2, 3, 4, 5, 6, 7, 6, 3, 1, 4];
let array2 = [2, 3, 4, 5, 6, 7, 6, 3, 1, 4];

//esIgual es un contador para comprobar cuantos numeros iguales hay
let esIgual = 0;

//Compruebo si los dos arrays tienen la misma longitud
if(array1.length === array2.length){
    //Si la tienen, hago un bucle for para recorrer los arrays
    for(let i = 0; i < array1.length; i++){
      //Compruebo si los valores de la posicion i son iguales
      if(array1[i] === array2[i]){
        //Si lo son aumento el contador en uno
        esIgual++;
      }  
    }

    //Si el contador de iguales es igual que la longitud de los arrays significa que todos los numeros son iguales.
    if(esIgual === array1.length){
        document.write("Los arrays tienen los mismos elementos");
    }else{
        document.write("Los arrays tienen elementos distintos");
    }

}else{
    document.write("Los arrays tienen distinta longitud.");
}