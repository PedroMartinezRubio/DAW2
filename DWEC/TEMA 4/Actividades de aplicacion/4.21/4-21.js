function convertir(f){
    let resultado = (f-32)/1.8;
    let c = resultado.toFixed(2);
    return `${f} son: ${c} grados celsius`;
}

document.write(convertir(100));