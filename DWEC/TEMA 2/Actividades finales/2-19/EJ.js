console.log("Bucle while");

let contador = 100;

while(contador > 0){
    if(contador%3!==0 && contador%7!==0){
        console.log(contador);
    }
    contador--;
}

console.log("----------------------");
console.log("Bucle do while");
contador = 100;

do {
    if(contador%3!==0 && contador%7!==0){
        console.log(contador);
    }
    contador--;
} while (contador > 0);
console.log("----------------------");
console.log("Bucle for");

for(let i = 100; i > 0; i--){
    if(i%3!==0 && i%7!==0){
        console.log(i);
    }
}