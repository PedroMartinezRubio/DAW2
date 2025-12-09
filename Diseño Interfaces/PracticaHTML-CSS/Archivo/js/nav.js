let lastScroll = 0;
const nav = document.getElementsById("bar");

window.addEventListener("scroll", ()=>{
    const currentScroll = window.scrollY;

    if(currentScroll <= 0){
        nav.classList.remove("nav-hidden");
        return;
    }

    if(currentScroll > lastScroll){
        nav.classList.add("nav-hidden");
    }else{
        nav.classList.remove("nav-hidden");
    }

    lastScroll = currentScroll;
});