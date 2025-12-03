let numero = Number(prompt("Introduzca un numero"));
let resultado = 1;

if(numero <= 0){
    console.log("Numero no valido");
}else{
    
    for(let i = numero; i >= 1; i--){
        resultado *= i;
    }
}
console.log("El factorial de "+numero+" es: "+resultado);