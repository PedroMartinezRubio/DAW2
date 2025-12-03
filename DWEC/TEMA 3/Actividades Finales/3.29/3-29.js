let matriz = Array();
matriz[0] = [1, 2, 3];
matriz[1] = [4, 5, 6];
matriz[2] = [7, 8, 9];

console.table(matriz);

let matriz2 = Array();
matriz2[0] = [0, 0, 0];
matriz2[1] = [0, 0, 0];
matriz2[2] = [0, 0, 0];

for(let i = 0; i < 3; i++){
    for(let j = 0; j< 3; j++){
        matriz2[i][j] = matriz[j][i];
    }
}
console.table(matriz2);