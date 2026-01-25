// Error: Intentar acceder a una variable no definida
console.log("Intentando acceder a una variable no definida:");
try {
    console.log(unaVariableNoDefinida);
} catch (error) {
    console.error("Error capturado:", error.message);
}
// Exception: Dividir un número por cero
console.log("\nIntentando dividir un número por cero:");
try {
    let resultado = 10 / 0;
    if (!isFinite(resultado)) {
        throw new Error("División por cero no permitida");
    }
    console.log("Resultado:", resultado);
} catch (exception) {
    console.error("Excepción capturada:", exception.message);
}
// Aviso: Uso de una función obsoleta
console.log("\nUsando una función obsoleta:");
function funcionObsoleta() {
    console.warn("Aviso: Esta función está obsoleta y será eliminada en futuras versiones.");
}
funcionObsoleta();