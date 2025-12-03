let patron = "2022-xrFdS/25_9";

class Etiqueta {
    nombre = "";
    referencia = "";
    constructor(nombre, referencia){
        this.nombre = nombre;
        this.referencia = referencia;
    }
    mostrar_articulo(){
        document.write(`Articulo: ${this.nombre}. Referencia: ${this.referencia}`);
    }
    validar_etiqueta(){
        let expReg = /^\d{4}-[a-z]{5}\/\d{2}\_\d$/i;
        if(expReg.test(this.referencia)){
            document.write("Validación correcta.");
        }else{
            document.write("No has pasado la validación");
        }
    }
}

let etq = new Etiqueta("Television", patron);

etq.mostrar_articulo();
document.write("<br>");
etq.validar_etiqueta();