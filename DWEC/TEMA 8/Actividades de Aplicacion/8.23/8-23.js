
let e;

try{
    //Error EvalError
    // e = EvalError;

    //Error RangeError
    // let edadPersona = 16;
    // if(edadPersona < 18){
    //     e = RangeError;
    // }
    
    //Error ReferenceError
    //Variable no definida
    //e = ReferenceError;

    //Error SyntaxError
    //e = SyntaxError;

    //Error TypeError
    //e = TypeError;

    //Error URIError
    //e = URIError;

    switch(e){
        case EvalError:
            throw new EvalError("Error al usar el metodo Eval() EvalError");
            break;
        case RangeError:
            throw new RangeError("Error de rango RangeError");
            break;
        case ReferenceError:
            throw new ReferenceError("Error de referencia ReferenceError");
            break;
        case SyntaxError:
            throw new SyntaxError("Error de sintaxis SyntaxError");
            break;
        case TypeError:
            throw new TypeError("Error de tipo TypeError");
            break;
        case URIError:
            throw new URIError("Error en la codificacion de una URI URIError");
            break;
        default:
            throw new Error("Error generico Error");
            break;
    }
}catch(err){
    console.log("Error capturado: " + err.message);
}