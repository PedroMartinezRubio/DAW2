class Miembro{
    nombre = "";
    alta = "";
    estado = "";
    constructor(nombre, alta, estado){
        this.nombre = nombre;
        this.alta = alta;
        this.estado = estado;
    }
}
class Profesor extends Miembro{
    nAlumnos = "";
    constructor(nombre, alta, estado, nAlumnos){
        super(nombre, alta, estado);
        this.nAlumnos = nAlumnos;
    }
}
class Alumno extends Miembro{
    nAsignaturas = "";
    constructor(nombre, alta, estado, nAsignaturas){
        super(nombre, alta, estado);
        this.nAlumnos = nAsignaturas;
    }
}

let unMiembro = new Miembro("Pepe Ruiz", "12/02/2021", "finalizado");
let unProfesor = new Profesor("Samuel Orta", "25/06/2021", "finalizado", 30);
let unAlumno = new Alumno("Elena Sanchez", "06/03/2022", "finalizado", 11);
console.log("Elementos de un Profesor usando forin");
console.log("------------");
for (elemento in unProfesor) {
    console.log(elemento);
}
console.log("               ");
console.log("Elementos de un Alumno usando un forof");
console.log("------------");
for (elemento of Object.getOwnPropertyNames(unAlumno)) {
    console.log(elemento);
}