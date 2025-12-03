class op {

    difFechas(f1, f2){
        //Clacula los dias que hay de diferencia entre las dos fechas
        let fecha1 = new Date(f1);
        let fecha2 = new Date(f2);

        let resultado;

        if(fecha1 > fecha2){
            resultado = fecha1 - fecha2;
        }else{
             resultado = fecha2 - fecha1;
        }
        
        resultado /= 86400000;
        document.write(`Hay ${resultado} dias entre las dos fechas.<br>`);
    }

    maxFecha(f1, f2){
        //Devuelve la fecha mas reciente
        let fecha1 = new Date(f1);
        let fecha2 = new Date(f2);

        let resultado;

        if(fecha1 > fecha2){
            resultado = fecha1.toLocaleDateString();
        }else{
             resultado = fecha2.toLocaleDateString();
        }
        document.write(`La fecha mas reciente es: ${resultado}<br>`);
    }

    testFecha(fecha){
        //Comprueba si el formato de la fecha es correcto
        let patron = new RegExp('\\d{4}-\\d{2}-\\d{2}');


        if(patron.test(fecha)){
            document.write(`La fecha usa el formato correcto.<br>`);
        }else{
            document.write(`El formato de la fecha es incorrecto.<br>`);
        }
    }

    ayerFecha(fecha){
        //Devuelve el dia anterior a una fecha dada

        let f = new Date(fecha);
        let nuevaFecha = new Date(f);
        nuevaFecha.setDate(nuevaFecha.getDate() -1);
        document.write(`El dia anterior a ${f.toLocaleDateString()} fue ${nuevaFecha.toLocaleDateString()}.<br>`);
    }

    mañanaFecha(fecha){
        //Devuelve el dia posterior a una fecha dada
        let f = new Date(fecha);
        let nuevaFecha = new Date(f);
        nuevaFecha.setDate(nuevaFecha.getDate() + 1);
        document.write(`El dia posterior a ${f.toLocaleDateString()} es ${nuevaFecha.toLocaleDateString()}.<br>`);
    }
}

let a = new op();

a.difFechas("2005-03-11", "2005-03-08");
a.maxFecha("2005-02-11", "2005-03-08");
a.testFecha("2005-03-11");
a.ayerFecha("2005-03-11");
a.mañanaFecha("2005-03-11");