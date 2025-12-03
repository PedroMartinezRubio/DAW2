class Aula{
    nAula = "";
    aforo = "";
    constructor(nAula, aforo){
        this.nAula = nAula;
        this.aforo = aforo;
    }
    getNumeroAula(){
        document.write(`Numero del aula: ${this.nAula}<br>`);
    }
    getAforo(){
        document.write(`El aforo maximo de la clase es: ${this.aforo}<br>`);
    }
    asignatura(){
        document.write(`En este aula se imparten clases:<br>`);
    }
}

class Musica extends Aula{
    nIntrumentos = "";
    constructor(nAula, aforo, nIntrumentos){
        super(nAula, aforo);
        this.nIntrumentos = nIntrumentos;
    }
    asignatura(){
        super.asignatura();
        document.write(`Este es el aula de musica<br>`);
    }
}

class Tecnologia extends Aula{
    nHerramientas = "";
    constructor(nAula, aforo, nHerramientas){
        super(nAula, aforo);
        this.nHerramientas = nHerramientas;
    }
    asignatura(){
        super.asignatura();
        document.write(`Este es el aula de tecnologia<br>`);
    }
}

let m = new Musica("3.2.1", 30, 5);
document.write("<h2>Aula de musica</h2>");
m.getAforo();
m.asignatura();

document.write("<h2>Aula de tecnología</h2>");
let t = new Tecnologia("3.3.5", 23, 12);
t.getNumeroAula();
t.asignatura();