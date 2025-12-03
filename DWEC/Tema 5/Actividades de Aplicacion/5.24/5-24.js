class Pelicula {
    nombre;
    fecha_estreno;
    duracion;
    genero;
    actores;
    cartel;
    director;
    constructor(cadena){
        let peli = JSON.parse(cadena);
        this.nombre = peli.Nombre;
        this.fecha_estreno = peli.Fecha_de_estreno;
        this.duracion = peli.Duracion;
        this.genero = peli.Genero;
        this.actores = peli.Actores;
        this.cartel = peli.Cartel;
        this.director = peli.Director;
    }

    ver(){
        document.write(`
            <b>Nombre de la pelicula: </b>${this.nombre}<br>
            <b>Año de estreno: </b>${this.fecha_estreno}<br>
            <b>Duración de la pelicula: </b>${this.duracion}<br>
            <b>Genero de la pelicula: </b>${this.genero}<br>
            <b>Actores principales: </b>${this.actores}<br>
            <b>URL del cartel: </b>${this.cartel}<br>
            <b>Director: </b>${this.director}
            `);
    }
}

let cadena = new String(`{
    "Nombre": "El club de la lucha",
    "Fecha_de_estreno":"1999",
    "Duracion":"139 minutos",
    "Genero":"Thriller",
    "Actores":["Brad Pitt", "Edward Norton", "Helena Bonham Carter", "Jared Leto", "Holt McCallany", "Meat Loaf", "Zach Grenier"],
    "Cartel":"https:www.El-Club-De-La-Lucha.com",
    "Director":"David Fincher"
}`);

const p1 = new Pelicula(cadena);

p1.ver();