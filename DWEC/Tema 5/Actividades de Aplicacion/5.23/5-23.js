class Club {
    añoFundacion;
    numSocios;
    nombreEstadio;
    ciudad;
    palmares;
    constructor(añoFundacion, numSocios, nombreEstadio, ciudad, palmares){
        this.añoFundacion = añoFundacion ?? '';
        this.numSocios = numSocios ?? '';
        this.nombreEstadio = nombreEstadio ?? '';
        this.ciudad = ciudad ?? '';
        this.palmares = new Map(palmares);
    }
    verClub(){
        document.write(`Año fundación: ${this.añoFundacion}<br>
                        Numero de socios: ${this.numSocios}<br>
                        Nombre del estadio: ${this.nombreEstadio}<br>
                        Ciudad: ${this.ciudad}<br>
                        Palmares: <br>`);

                        for (const titulo of this.palmares) {
                            document.write("- "+titulo+"<br>");
                        }
        document.write("<br>");
    }
}

let palmaresValencia = new Map([
    ["Liga 3ª División", "Temporada 2002/2003"],
    ["Dos Subcampeonatos de Segunda división B", "Temporada 2003/2004 y 2008/2009"],
    ["Subcampeonato de la Federación", "Temporada 2009/2010"]
]);

const c1 = new Club();
const c2 = new Club(1987);
const c3 = new Club(1998, 52);
const c4 = new Club(2001, 25, "Juan Cayuela");
const c5 = new Club(2012, 12, "Estadio del Bala Azul", "Cartagena");
const c6 = new Club(1954, 436, "Francisco Artés Carrasco", "Lorca", palmaresValencia);

c1.verClub();
c2.verClub();
c3.verClub();
c4.verClub();
c5.verClub();
c6.verClub();