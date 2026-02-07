let promesa = new Promise((resultado) =>{
    let texto1 = "CARGANDO";
    let texto2 = "LISTO PARA ACTUAR";

    console.log(texto1);

    window.addEventListener("load", () =>{
        resultado(texto2);
    })
});

promesa.then((mensaje) => {
    console.log(mensaje);
})