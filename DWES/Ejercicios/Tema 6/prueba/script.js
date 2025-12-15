function getTime() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "hora.php", true);
    xhttp.send();
}

window.onload = function() {
    getTime();

    setInterval(getTime, 5000);
};