//crear un programa con un try..catch..finally que incluya un return en cada bloque
//lanzar un error que capture el catch

function ejemplo() {
    try {
        console.log("Dentro del bloque try");
        throw new Error("Error lanzado en el bloque try");
        return "Return desde el bloque try"; // Este return no se ejecutará debido al error lanzado
    } catch (error) {
        console.log("Dentro del bloque catch");
        console.log("Error capturado:", error.message);
        return "Return desde el bloque catch";
    } finally {
        console.log("Dentro del bloque finally");
        return "Return desde el bloque finally";
    }   
}

const resultado = ejemplo();
console.log("Resultado de la función:", resultado);

// El bloque finally siempre se ejecuta, incluso si hay un return en try o catch.
// Si hay un return en finally, este sobrescribe cualquier return anterior en try o catch.