let numeros = document.getElementsByTagName("p");

let sumarNumeros = (suma) =>{
    setTimeout(() =>{
        suma += parseInt(numeros[0].textContent);
        setTimeout(() =>{
            suma += parseInt(numeros[1].textContent);
            setTimeout(() =>{
                suma += parseInt(numeros[2].textContent);
                console.log(suma);
            }, 1000)
        }, 1000)
    }, 1000)
}

sumarNumeros(0);