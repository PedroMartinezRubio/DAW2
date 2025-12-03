(function (){
    console.log("Inicio de ejecucion:");
    console.log(Date());
})();
 
/*Esto seria una opcion, pasandole la funcion Date() por parametro.

(function (fecha){
    console.log("Inicio de ejecucion:");
    console.log(fecha);
})(Date());
*/

/*Esto seria otra opcion, guardando la funcion en una variable

const fechaActual = (function (fecha){
    return(fecha);
})(Date());
console.log("Inicio de ejecucion:");
console.log(fechaActual)
*/