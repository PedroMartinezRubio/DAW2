function crearCarton(){
    let carton = []; 

    // Crea 8 filas; cada fila es un array de 5 posiciones (columnas).
    for(let j = 0; j < 8; j++){
        carton[j] = new Array(5);
    }

    let numerosColocados = 0; // Contador de cuántos números se han colocado en el cartón.
    
    while(numerosColocados < 20){
        
        let numeroAleatorio = Math.floor(Math.random() * 90) + 1;

        // Selecciona una fila aleatoria (0..7) y una columna aleatoria (0..4).
        let fila = Math.floor(Math.random() * 8);
        let columna = Math.floor(Math.random() * 5);

        // Si en esa posición aún no hay nada (undefined), colocamos el número.
        if(carton[fila][columna] === undefined){
            carton[fila][columna] = numeroAleatorio;
            numerosColocados++;
        }else{
            continue; // Si la casilla ya estaba ocupada, vuelve a intentar (otra iteración).
        }
    }
    return carton; 
}



function comprobarBingo(carton){
    let encontrado = true; 
    // Recorremos cada fila del cartón.
    for(const fila of carton){
        // Recorremos cada elemento (columna) de la fila.
        for (const columna of fila) {
            // Si encontramos una celda que es un número (no marcada) y no es "X",
            // entonces NO hay bingo: devolvemos false inmediatamente.
            if(columna !== "X" && typeof columna === "number"){
                encontrado = false;
                return encontrado; 
            }
        }
    }
    return encontrado; // Si no se encontró ningún número sin marcar, devuelve true.
}

function comprobarNumeroEnCarton(){
    let cartones = [];
    // Genera 5 cartones nuevos.
    for(let i = 0; i < 5; i++){
        cartones[i] = crearCarton();
        
    }

    // Crea un Set para almacenar una permutación de los números 1..90 en orden aleatorio.
    let numeros = new Set();
    // Añade números aleatorios 1..90 hasta que el Set contenga 90 elementos.
    // El Set automáticamente evita duplicados.
    
    while(numeros.size < 90){
        let numero = Math.floor(Math.random() * 90) + 1;
        numeros.add(numero);
    }
    // Convierte el Set a Array para poder recorrer los números por índice.
    numeros = Array.from(numeros);

    // Recorremos la lista de números.
    for(let i = 0; i < numeros.length; i++){

        let numeroActual = numeros[i];

        // Para cada número, lo comprobamos en cada cartón.
        for(let j = 0; j < cartones.length; j++){

            let cartonActual = cartones[j];

            // Recorremos todas las filas y columnas del cartón actual.
            for(let fila = 0; fila < cartonActual.length; fila++){
                for(let columna = 0; columna < cartonActual[fila].length; columna++){

                    // Si la celda contiene el número actual, lo marcamos con "X".
                    if(cartonActual[fila][columna] === numeroActual){
                        cartonActual[fila][columna] = "X";
                    }
                }
            }
            // Tras marcar en este cartón, comprobamos si ha hecho bingo.
            if(comprobarBingo(cartonActual)){
                console.log("El carton " + (j+1) + " ha cantado bingo!");
                return cartonActual; // Devuelve el cartón ganador y termina la función.
            }
        }
    }
}

console.log(comprobarNumeroEnCarton());
