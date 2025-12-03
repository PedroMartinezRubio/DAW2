class telefono {
    cpu;
    ram;
    almacenamiento;
    ancho;
    alto;
    numCamaras;
    constructor(cpu, ram, alm, w, h, numC){
        this.cpu = cpu ?? '';
        this.ram = ram ?? '';
        this.almacenamiento = alm ?? '';
        this.ancho = w ?? '';
        this.alto = h ?? '';
        this.numCamaras = numC ?? '';
    }
    toString(){
        document.write(`CPU del movil: ${this.cpu}<br>
        RAM del movil: ${this.ram}<br>
        Almacenamiento disponible: ${this.almacenamiento}<br>
        Ancho: ${this.ancho}<br>
        Alto: ${this.alto}<br>
        Numero de camaras: ${this.numCamaras}<br>`);
    }
}

let movil1 = new telefono("MediaTek Dimensity 9400", "7GB", "256GB");
let movil2 = new telefono("Qualcomm Snapdragon 8 Gen 4", "8GB", "500GB", 0.2, 0.1, 2);
let movil3 = new telefono("Samsung Exynos 2500", "6GB", "500GB", 0.21);
let movil4 = new telefono("Samsung Exynos 2000X", "5GB", "256GB", 0.25, 0.12);
document.write("<b>Movil 1</b><br>");
movil1.toString();
document.write("<br>");
document.write("<b>Movil 2</b><br>");
movil2.toString();
document.write("<br>");
document.write("<b>Movil 3</b><br>");
movil3.toString();
document.write("<br>");
document.write("<b>Movil 4</b><br>");
movil4.toString();