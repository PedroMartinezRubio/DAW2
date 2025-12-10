document.cookie = 'nombre=antonio; path=/';


setTimeout(() =>{
    if(document.cookie.trim() !== ""){
        document.write("Existen cookies: "+document.cookie);
    }else{
        document.write("No existe ninguna cookie");
    }
    
    document.cookie = "nombre=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    
    console.log(document.cookie);

    setTimeout(() =>{

        if(document.cookie.trim() !== ""){
            document.write("Existen cookies: "+document.cookie+"<br>");
        }else{
            document.write("No existe ninguna cookie");
        }
        
        document.cookie = "nombre=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
        document.cookie = "edad=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
        
        console.log(document.cookie);

    }, 10000);

}, 10000);
