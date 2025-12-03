let listaDesordenada = document.getElementsByTagName("ul")[0];

function añadirIngradiente(){
    let ingrediente;
    do{
        ingrediente = prompt("Ingrese un nuevo ingrediente");

        if(ingrediente !== null && ingrediente.trim() !== ''){
            let li = document.createElement("li");
            li.textContent = ingrediente;

            listaDesordenada.appendChild(li);
        }
        
    }while(ingrediente !== null)

}

const boton = document.getElementsByTagName("button")[0];

boton.addEventListener("click", añadirIngradiente);