function anagrama(p1, p2){
    

    cadena1 = p1.split('');
    cadena2 = p2.split('');
   
    cadena1.sort();
    cadena2.sort();

    if(cadena1.length !== cadena2.length){
        return "Las cadenas son de distinta longitud.";
    }else{
        for(let i = 0; i < cadena1.length; i++) {
            if(cadena1[i] !== cadena2[i]){
                return false;
            }
        }
    }

    return true;
}

p1 = "fresa";
p2 = "frase";
document.write(`<h3>Las palabras son: ${p1} y ${p2}</h3>`);
document.write(" Comprobacion de si son anagramas: "+
    anagrama(p1,p2)
);