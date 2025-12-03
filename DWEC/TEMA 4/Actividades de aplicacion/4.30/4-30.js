function primo(num){
    let esPrimo = false;
    if(num === 1){
        return `El numero: ${num} no es primo`;
    }else{
        for(let i = 2; i < num; i++){
            if(num % i === 0){
                esPrimo = true;
            }
        }

        if(!esPrimo){
            return `El numero: ${num} es primo`;
        }else{
            return `El numero: ${num} no es primo`;
        }
    }
}

document.write(primo(7));