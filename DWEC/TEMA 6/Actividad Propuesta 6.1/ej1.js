window.setTimeout(()=>{
    let enlace1 = document.getElementById("enlace1");
    enlace1.remove();
    window.setTimeout(()=>{
        let enlace2 = document.getElementById("enlace2");
        enlace2.remove();
    }, 10000);
}, 5000);