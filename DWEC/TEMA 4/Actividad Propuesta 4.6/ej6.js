const cadenas = (cad1, cad2) => {
    let voc1 = 0;
    let voc2 = 0;
    for(let i = 0; i < cad1.length; i++){
        if(cad1[i] === "a" || cad1[i] === "e" || cad1[i] === "i" || cad1[i] === "o" || cad1[i] === "u"){
            voc1++;
        }
    }

    for(let i = 0; i < cad2.length; i++){
        if(cad2[i] === "a" || cad2[i] === "e" || cad2[i] === "i" || cad2[i] === "o" || cad2[i] === "u"){
            voc2++;
        }
    }

    if(voc1 > voc2){
        console.log(`La cadena de texto ${cad1} tiene mas vocales: ${voc1}`);
    }else if(voc2 > voc1){
        console.log(`La cadena de texto ${cad2} tiene mas vocales: ${voc2}`);
    }else{
        console.log(`Las cadenas ${cad1} y ${cad2} tienen el mismo numero de vocales: ${voc1}`);
    }
};

cadenas("Naturaleza", "esternocleidomastoideo");