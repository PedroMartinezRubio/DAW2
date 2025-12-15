let boton = document.getElementById("bt");

boton.addEventListener("click", (objeto)=>{
    console.info(objeto);
    console.info(objeto.screenX+"\n"+objeto.button); //Prueba para mostrar propiedades especificas
});