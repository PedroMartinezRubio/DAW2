class trigonometria {
    constructor(){}
    seno(n){
        console.log("Seno");
        console.log(Math.sin(n));
        console.log("   ");
    }
    coseno(n){
        console.log("Coseno");
        console.log(Math.cos(n));
        console.log("   ");
    }
    tangente(n){
        console.log("Tangente");
        console.log(Math.tan(n));
        console.log("   ");
    }
    arcoseno(n){
        console.log("Arcoseno");
        console.log(Math.asin(n));
        console.log("   ");
    }
    arcocoseno(n){
        console.log("Arcocoseno");
        console.log(Math.acos(n));
        console.log("   ");
    }
    arcotangente(n){
        console.log("Arcotangente");
        console.log(Math.atan(n));
    }
}
let numero = 10;
let trigo = new trigonometria();

trigo.seno(numero);
trigo.coseno(numero);
trigo.tangente(numero);
trigo.arcoseno(1);
trigo.arcocoseno(-1);
trigo.arcotangente(numero);