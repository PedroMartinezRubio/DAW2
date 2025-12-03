function descuento(precio, descuento){
    let desc = (precio * descuento)/100;
    let precioFinal = precio - desc;
    return precioFinal;
}

document.write(descuento(10, 20));