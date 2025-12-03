//Creo un array de 10 posiciones
let equipos = Array(10);

//En cada posicion guardo otro array con los datos de cada equipo
equipos[0] = ["Totana", 18, "4 / 2 / 0", "10 / 4"];
equipos[1] = ["Alhama", 3, " 0/ 3 / 3", "5 / 6"];
equipos[2] = ["Mazarron", 18, " 5 / 3 / 2", "1 / 4"];
equipos[3] = ["Lorca", 20, "14 / 9 / 3", "12 / 4"];
equipos[4] = ["Bala azul", 46, "0 / 8 / 4", "3 / 4"];
equipos[5] = ["Ranero", 19, "7 / 9 / 5", "8 / 4"];
equipos[6] = ["Murcia", 16, "4 / 5 / 6", "9 / 4"];
equipos[7] = ["Fuente tocinos", 56, "2 / 2 / 2", "2 / 4"];
equipos[8] = ["Aguilas", 34, "0 / 8 / 8", "7 / 4"];
equipos[9] = ["Jumilla", 10, " 7 / 0 / 1", "11 / 4"];

//Muestro los equipos por pantalla en forma de array
console.table(equipos);

//Otro array con los string que van a salir por pantalla
//Tenia otra intencion a la hora de usarlo, pero se ha quedado solo para imprimir el string
let  texto = Array(4);
texto[0] = ["Nombre Del equipo: "];
texto[1] = ["Puntos: "];
texto[2] = ["Partidos Ganados / Empatados / Perdidos: "];
texto[3] = ["Goles favor / Goles en contra: "];

//Creo las variables donde voy a guardar los datos del equipo con mas puntos
let nombre;
let puntos;
let partidos;
let goles;

//Recorro el array para comprobar los puntos de los equipos
for (let i = 0; i < equipos.length; i++) {
    //equipo = equipos[i];
    //Aqui recorro las columnas de cada equipo y comparo los puntos del equipo actual con el del anterior
    //Si el equipo actual tiene mas puntos que el anterior guardo sus datos en las variables
    for(let j = 0; j < 4; j++){
        if(i >= 1 && equipos[i][1] > equipos[i-1][1]){

            //Guardo los datos del equipo con mas puntos en las variables
            nombre = equipos[i][0];
            puntos = equipos[i][1];
            partidos = equipos[i][2];
            goles = equipos[i][3];
        }

    }
    
}

//Aqui muestro por pantalla los datos del equipo ganador
document.write("<h1>EQUIPO GANADOR DE LA LIGA</h1>");
document.write(texto[0]+nombre+"<br>");
document.write(texto[1]+puntos+"<br>");
document.write(texto[2]+partidos+"<br>");
document.write(texto[3]+goles);
