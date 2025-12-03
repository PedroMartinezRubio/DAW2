let matriz = new Object();
matriz.nFilas = 5;
matriz.nColumnas = 4;
matriz.contenido = new Array(this.nFilas);
matriz.inicializarMatriz = function(valor){
    for(let i = 0; i < this.nFilas; i++){
        this.contenido[i] = [this.nColumnas];
        for(let j = 0; j < this.nColumnas; j++){
            this.contenido[i][j] = valor;
        }
    }
}
matriz.aleatoriaMatriz = function (){
    for(let i = 0; i < this.nFilas; i++){
        for(let j = 0; j < this.nColumnas; j++){
            this.contenido[i][j] = Math.floor(Math.random() * 100) + 1;
        }
    }
}

matriz.verMatriz = function (){
    for(let i = 0; i < this.nFilas; i++){
        for(let j = 0; j < this.nColumnas; j++){
            document.write(this.contenido[i][j] + " ");
        }
        document.write("<br>"); 
    }
}

document.write("<h2>Inicialización de la matriz</h2>");
matriz.inicializarMatriz("pera");
matriz.verMatriz();
document.write("<h2>Matriz Aleatoria</h2>");
matriz.aleatoriaMatriz();
matriz.verMatriz();