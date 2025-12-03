function dados(tiradas){
    let dado1;
    let dado2;
    cont1 = 0;
    cont2 = 0;
    let tirada_mayor = 0;
    for(let i = 1; i <= tiradas; i++){
        dado1 = Math.floor(Math.random()*7);
        dado2 = Math.floor(Math.random()*7);
        if(dado1 > tirada_mayor){
            tirada_mayor = dado1;
            cont1 = i;
        }
        if(dado2 > tirada_mayor){
            tirada_mayor = dado2;
            cont2 = i;
        }
    }

    if(cont1 > cont2){
        return `La tirada ganadora ha sido del jugador 1. En la tirada ${cont1} con una puntuacion de ${tirada_mayor}`;
    }else{
        return `La tirada ganadora ha sido del jugador 2. En la tirada ${cont2} con una puntuacion de ${tirada_mayor}`;
    }
}

document.write(dados(5));