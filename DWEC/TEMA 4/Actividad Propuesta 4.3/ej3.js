function adivina(...letras){
    let palabra = "diomedes";
    let result = "";

    for(const letra of palabra){
        if(letras.includes(letra)){
            result += letra;
        }else{
            result += "-";
        }
        
    }
    document.write(result);
}

adivina("a", "e", "i", "o", "u", "d", "n");