class Zapatilla{
    #marca = ""; //Con la almohadilla creamos una propiedad privada
    talla = "";
    constructor(marca, talla){
        this.#marca = marca;
        this.talla = talla;
    }
    atar_cordoneras(){
        document.write("Las cordoneras se han atado correctamente.<br>");
    }
    desatar_cordoneras(){
        document.write("Las cordoneras se han desatado correctamente.<br>");
    }
    mostrar(){
        document.write(`Marca: ${this.#marca} | Talla de pie: ${this.talla}<br>`);
    }
}

let zapa = new Zapatilla("Jordan's", 41);

zapa.mostrar();
zapa.atar_cordoneras();
zapa.desatar_cordoneras();