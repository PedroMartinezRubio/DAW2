let tablero = [
    ["O", "X", "X"], 
    ["X", "O", "X"], 
    ["O", "O", "X"]
];

let ganador = "";

for(let i = 0; i < 3; i++){
    if(tablero[i][0] == tablero[i][1] && tablero[i][1] == tablero[i][2]){
            ganador = `Hay ganador. 3 en raya en la fila ${i}`;
            break;
    }
    if(tablero[0][i] == tablero[1][i] && tablero[1][i] == tablero[2][i]){
        ganador = `Hay ganador. 3 en raya en la columna ${i}`;
        break;
    }
    if(tablero[0][0] == tablero [1][1] && tablero[1][1] == tablero[2][2]){
    ganador = `Hay un gandor. 3 en raya en la diagonal`;
    break;
    }
    if(tablero[0][2] == tablero[1][1] && tablero[1][1] == tablero[2][0]){
        ganador = `Hay un gandor. 3 en raya en la diagonal inversa`;
        break;
    }
}


console.table(tablero);
console.log(`El ganador es: ${ganador}`);

