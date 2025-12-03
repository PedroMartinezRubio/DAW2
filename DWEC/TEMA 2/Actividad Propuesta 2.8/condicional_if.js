let nombre = prompt("Escriba su nombre");
let edad = prompt("Escriba su edad");
 if(edad <= 12){
    console.info("%c"+nombre+" tiene "+edad+" y por lo tanto es un niño", "font-weight: bold; color: green;");
 }else if(edad >=13 && edad <= 17){
    console.info("%c"+nombre+" tiene "+edad+" y por lo tanto es un adolescente", "font-weight: bold; color: green;");
 }else if(edad >= 18 && edad <=64){
    console.info("%c"+nombre+" tiene "+edad+" y por lo tanto es un trabajador", "font-weight: bold; color: green;");
 }else{
    console.info(`%c${nombre} tiene ${edad} y por lo tanto es un jubilado`, "font-weight: bold; color: green;");
 }