class Persona {
    nombre = "";
    edad = "";
    constructor(nombre, edad){
        this.nombre = nombre;
        this.edad = edad;
    }
    info(){
        document.write(`${this.nombre} tiene ${this.edad} años.<br>`);
    }
    mayorEdad(){
        if(this.edad >= 18){
            document.write(`${this.nombre} es mayor de edad.`);
        }else{
            document.write(`${this.nombre} es menor de edad.`);
        }
    }
}

let p = new Persona("Juan", 27);

p.info();
p.mayorEdad();