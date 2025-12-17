document.cookie = 'nombre=antonio; path=/';

let caja = document.getElementById("caja");
setInterval(() =>{
    if(document.cookie.trim() !== ""){ //Se comprueba que existan cookies
        caja.innerHTML = "Existen cookies: "+document.cookie;
    }else{
        caja.innerHTML = "No existe ninguna cookie";
    }
    
    document.cookie = "nombre=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/"; //Se borra la cookie
    
    //console.log(document.cookie);

}, 10000);