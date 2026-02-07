let promesa1 = new Promise((resultado)=>{
    let p = document.getElementsByTagName("p")[0];
    p.addEventListener("click", ()=>{
        resultado();
        //{once:true} Sirve para ejecutar el evento una sola vez
        //Una vez se hace click en el parrafo, se ejecuta el evento y se elimina automaticamente
    }, { once: true }) 
});

promesa1.then(()=>{
    return new Promise((resultado)=>{
        let caja = document.getElementById("caja");

        caja.addEventListener("mouseenter", ()=>{
            resultado();
        }, { once:true })
    })
})

.then(()=>{
    let texto = document.getElementById("res");
    texto.innerHTML = "¡Has completado el reto!";
})