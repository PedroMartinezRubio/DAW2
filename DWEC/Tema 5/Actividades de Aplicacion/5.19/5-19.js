class Telefono {
    marca = "";
    modelo = "";
    constructor(marca, modelo){
        this.marca = marca;
        this.modelo = modelo;
    }
    mostrar(){
        document.write(`<b>Marca del telefono: </b>${this.marca}.<br> <b>Modelo: </b>${this.modelo}<br><br>`);
    }
}

class Movil extends Telefono{
    nCamaras = "";
    constructor(marca, modelo, nCamaras){
        super(marca, modelo);
        this.nCamaras = nCamaras;
    }
    mostrar(){
        document.write(`<b>Marca del telefono: </b>${this.marca}.<br> <b>Modelo: </b>${this.modelo}<br><b>Numero de caramas: </b>${this.nCamaras}<br><br>`);
    }
}

class Fijo extends Telefono {
    tipoCable = "";
    constructor(marca, modelo, tipoCable){
        super(marca, modelo);
        this.tipoCable = tipoCable;
    }
    mostrar(){
        document.write(`<b>Marca del telefono: </b>${this.marca}.<br> <b>Modelo: </b>${this.modelo}<br><b>Tipo de cable: </b>${this.tipoCable}<br><br>`);
    }
}

let tf1 = new Telefono("Motorola", "g35");
document.write("<h2>Telefono</h2>");
tf1.mostrar();

let movil = new Movil("Iphone", "16 pro", 4);
document.write("<h2>Telefono Movil</h2>");
movil.mostrar();

let fijo = new Fijo("Alcatel", "S280", "cobre");
document.write("<h2>Telefono Fijo</h2>");
fijo.mostrar();