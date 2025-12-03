let palabras = ["ganadora", "aute$", "di^ficil", "casual", "quiz@s", "^??hola!!"];

function palabrasFiltradas(palabras){
    palabras = palabras.filter(palabra => {
        const abecedario = "abcdefghijklmnñopqrstuvwxyz";

        //arrayAbecedario = abecedario.split('');
        caracteres = [];
        for(const letra of palabra){
            if(!abecedario.includes(letra)){
                caracteres.push(letra);
            }
        }

        for (const elemento of caracteres) {
            document.write(elemento+" ");
        }
    });
}

palabrasFiltradas(palabras);