//Vamos a lanzar un dado.
//Hasta que no salga un 6 la tirada tiene que repetirse

//Es mejor hace un bucle do while porque asi nos asseguramos que el dado
//sea lanzado minimo una vez. Con un bucle while el programa no entraria en el bucle
//o tendriamos que escribir dos veces el mismo codigo, una vez antes de entrar al bucle
//y otra vez cuando este dentro del bucle, asi que esta opcion es poco eficiente.

let dado;

do {
    dado = Math.floor(Math.random() * 6) + 1;
    console.log("Has sacado: " + dado);
} while (dado !== 6);

console.log("Enhorabuena! Has ganado!");