let x = 3;

console.log("X++");
console.log(x++);//Primero muestra la variable sin modificar, despues hace la suma
console.log(x);//Muestra la variable despues de haber hecho la suma

console.log("++X");
console.log(++x);//Primero hace la suma y despues muestra el valor de a
console.log(x);//Muestra x, que aqui tiene el mismo valor que en el console.log() de encima

let y = 2;
console.log("Y--");
console.log(y--);//Pasa igual que con la suma, primero se muestra el valor y despues acurre la resta.
console.log(y);//Muestra la y despues de hacer la resta.

console.log("--Y");
console.log(--y);//Primero hace la operacion y muestra el valor modificado
console.log(y);//Muestra el valor de y que es lo mismo que el console.log() anterior