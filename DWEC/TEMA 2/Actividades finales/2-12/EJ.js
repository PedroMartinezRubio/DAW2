let a = Number(prompt("Introduce el valor de A"));
let b = Number(prompt("Introduce el valor de B"));
let c = Number(prompt("Introduce el valor de C"));
let x;
//let op = b * b - 4 * a * c; -- Esta es la operacion dentro de la raiz cuadrada
//La raiz cuadrada se hace con Math.sqrt(valorNumerico);
//Luego se divide entre 2*valor

console.log("Para calcular una ecuacion de segundo grado se usa la siguiente formula: ");
console.log("-b +- Math.sqrt(b * b - 4 * a *c)/2*a");

console.log(a, b, c);

let op = b * b - 4 * a * c;
let raiz = Math.sqrt(op);

if(raiz === 0){
    x = -b / (2 * a);
    console.log("Solo hay una solucion: x = "+x);
}else if(raiz > 0){
    let x1 = (-b + raiz) / 2 * a;
    let x2 = (-b - raiz) / 2 * a;
    console.log("Existen dos soluciones: ");
    console.log("La primera es: x = "+x1);
    console.log("La segunda es: x = "+x2);
}else{
    console.log("No existe una solucion real al problema.");
}