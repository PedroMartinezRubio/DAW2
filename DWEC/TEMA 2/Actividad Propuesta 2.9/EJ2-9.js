let letra = prompt("Introduce la inicial del dia de la semana (L, M, X, J, V, S, D)");

switch(letra.toUpperCase()){
    case 'L': 
        console.log("Horario de apertura: 08:15");
        break;
    case 'M':
        console.log("Horario de apertura: 09:15");
        break;
    case 'X':
        console.log("Horario de apertura: 10:30");
        break;
    case 'J':
        console.log("Horario de apertura: 16:00");
        break;
    case 'V':
        console.log("Horario de apertura: 12:40");
        break;
    case 'S':
        console.log("Horario de apertura: 14:00");
        break;
    case 'D':
        console.log("Horario de apertura: 16:15");
        break;
    default:
        console.log("No es una letra valida.");
        break;
}   