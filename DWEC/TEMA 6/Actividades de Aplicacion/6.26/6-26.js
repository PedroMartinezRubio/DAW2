let elementos = document.getElementsByTagName("li");

let orden = confirm("¿Quieres ordenar los elementos?");

if(orden){
    //ordenar la lista alfabéticamente

    //convertir HTMLCollection a array para poder usar sort
    let elementosArray = Array.from(elementos);
    //ordenar usando localeCompare
    elementosArray.sort((a, b) => a.textContent.localeCompare(b.textContent));
    //vaciar el contenido del padre y volver a añadir los elementos ordenados
    let padre = elementos[0].parentNode;
    padre.innerHTML = "";
    elementosArray.forEach(elemento => padre.appendChild(elemento));
}else{
    //desordenar la lista aleatoriamente

    //convertir HTMLCollection a array
    let elementosArray = Array.from(elementos);

    //algoritmo de Fisher-Yates para desordenar
    for(let i = elementosArray.length - 1; i > 0; i--){
        let j = Math.floor(Math.random() * (i + 1));
        [elementosArray[i], elementosArray[j]] = [elementosArray[j], elementosArray[i]];
    }
    //vaciar el contenido del padre y volver a añadir los elementos desordenados
    let padre = elementos[0].parentNode;
    padre.innerHTML = "";
    elementosArray.forEach(elemento => padre.appendChild(elemento));
}