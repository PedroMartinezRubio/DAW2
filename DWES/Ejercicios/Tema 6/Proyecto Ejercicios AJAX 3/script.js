let xhttp = new XMLHttpRequest();


document.getElementById("form").addEventListener("submit", function(event){

    event.preventDefault();


    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById("res").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "datos.php", true);
    xhttp.send(new FormData(document.getElementById("form")));
});
