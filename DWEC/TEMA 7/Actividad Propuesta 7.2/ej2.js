let enviar = document.querySelectorAll("a")[0];
let reset = document.querySelectorAll("a")[1];
let formulario = document.querySelector("form");

enviar.addEventListener("click", (evento)=>{
    evento.preventDefault();
    console.log("Formulario enviado");
    formulario.submit();
    //Sin el XAMPP no se puede ver el php.
});
reset.addEventListener("click", (evento)=>{
    evento.preventDefault();
    console.log("Formulario reseteado");
    formulario.reset();
});

