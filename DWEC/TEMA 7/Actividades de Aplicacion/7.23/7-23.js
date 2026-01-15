let caja = document.getElementById("caja");

caja.style.top = "0px";
caja.style.left = "0px";

caja.addEventListener("mouseenter", ()=>{
    let t = Math.floor(Math.random() * (window.innerWidth - caja.offsetWidth));
    let l = Math.floor(Math.random() * (window.innerHeight - caja.offsetHeight));
    caja.style.left = t + "px";
    caja.style.top = l + "px";
});