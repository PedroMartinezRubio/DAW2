do {
    opt = Number(prompt(
    "Bienvenido a la aplicacion de calculo.\n"+
    "Elija una de las siguientes opciones: \n"+
    "1. Area del triangulo\n"+
    "2. Area del rectangulo. \n"+
    "3. Area del circulo. \n"+
    "4. Salir de la aplicacion."
));

switch(opt){
    case 1:
        let baseT = Number(prompt("Introduzca la base del triangulo"));
        let alturaT = Number(prompt("Introduzca la altura del triangulo"));
        let areaT = (baseT*alturaT)/2
        console.log("El area del triangulo es: "+areaT);
        break;
    case 2:
        let baseR = Number(prompt("Introduzca la base del rectangulo"));
        let alturaR = Number(prompt("Introduzca la altura del rectangulo"));
        let areaR = baseR * alturaR;
        console.log("El area del rectangulo es: "+areaR);
        break;
    case 3:
        const PI = 3.14;
        let radio = Number(prompt("Introduzca el radio del circulo"));
        let areaC = PI * Math.pow(radio, 2);
        console.log("El area del circulo es: "+areaC);
        break;
    case 4:
        console.log("Has salido de la aplicacion. Vuelva pronto!");
        break;
    default: 
        console.log("opcion no valida. Vuelva a intentarlo");
        break;
}
} while (opt !== 4);
