let num1 = prompt("Introduzca un numero: ");
let simbolo = prompt("Introduzca un simbolo (+, -, *, /, **, %)");
let num2 = prompt("Introduzca un segundo numero: ");


switch(simbolo){
    case "+":
        console.log(Number(num1) + Number(num2));
        break;
    case "-":
        console.log(Number(num1) - Number(num2));
        break;
    case "*":
        console.log(Number(num1) * Number(num2));
        break;
    case "/":
        console.log(Number(num1) / Number(num2));
        break;
    case "**":
        console.log(Number(num1) ** Number(num2));
        break;
    case "%":
        console.log(Number(num1) % Number(num2));
        break;
    default:
        console.log("Valores introducidos no validos");
}