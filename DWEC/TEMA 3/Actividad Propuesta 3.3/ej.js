let nums = Array(100); //Creacion de array, La primera a siempre en mayusculas

for (let i = 0; i < nums.length; i++) {

    //Aignamos a la posicion i del array nums un numero random del 0 al 100
    nums[i] = Math.floor(Math.random()*100);

    //Comprobamos si es par, y si lo es, lo mostramos por pantalla y en la consola
    if(nums[i]%2 === 0){
        console.log(nums[i]);

        //Escribimos en la pagina el numero con un salto de linea
        document.write(nums[i]+"<br>");
    }
}