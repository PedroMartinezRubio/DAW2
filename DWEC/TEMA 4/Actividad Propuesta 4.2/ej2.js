function tirarDados(rondas = 5){
    let tiradaJ1 = 0;
    let tiradaJ2 = 0;
    let ganador;
    for(let i = 0; i < rondas; i++){
            tiradaJ1 += Math.floor(Math.random()*6);
            tiradaJ2 += Math.floor(Math.random()*6);
    }

    if(tiradaJ1 > tiradaJ2){
        ganador = "El jugador 1 ha gando con una puntuacion de: "+tiradaJ1+"<br>";
    }else{
        ganador = "El jugador 2 ha ganado con una puntuacion de: "+tiradaJ2+"<br>";
    }

    return document.writeln(ganador);
}

tirarDados();
tirarDados(3);
tirarDados(10);