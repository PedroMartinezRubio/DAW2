const TABLA = 7;
let contador = 0;
for(var i = 1; i < 100; i++){
    if(i%7 === 0){
        console.log(i);
        contador++;
    }
}
console.log("Hay un total de: "+contador+" multiplos");