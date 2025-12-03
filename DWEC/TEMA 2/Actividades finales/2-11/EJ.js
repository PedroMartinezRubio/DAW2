let num1 = 0;
var num2 = 15;
const PI = 3.141615;


console.log("let dentro del bloque: "+num1);
if(true){
    let num1 = 3;
    console.log("let cambiado: "+num1);
}
console.log("let despues del bloque: "+num1);

console.log("var antes del bloque: "+num2);
if(true){
    var num2 = 5;
    console.log("Var dentro del bloque: "+num2);
}
console.log("var despues del bloque: "+num2);

console.log("Valor de la constante antesd del cambio: "+PI);
console.log("Valor cambiado: ");
PI = 9;
console.log(PI);