let dias = Number(prompt("Introduce una cantidad de dias"));
let horas = Number(prompt("Introduce una cantidad de horas"));
let minutos = Number(prompt("Introduce una cantidad de minutos"));

console.log(dias+" dias, "+horas+" horas y "+minutos+" son: ");

diasAS = dias * 86400;
horasAS = horas * 3600;
minutosAS = minutos * 60;
let segundos = diasAS + horasAS + minutosAS;
console.log(segundos+" segundos.");