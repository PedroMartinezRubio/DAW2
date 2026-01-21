let lienzo = document.getElementById("lienzo");
let contexto = lienzo.getContext("2d");

//dibujo del sol
contexto.beginPath();
contexto.arc(80, 80, 50, 0, 2 * Math.PI);
contexto.fillStyle = "yellow";
contexto.fill();
contexto.strokeStyle = "orange";
contexto.lineWidth = 5;
contexto.stroke();
contexto.closePath();

//dibujo del tronco del arbol
contexto.beginPath();
contexto.fillStyle = "sienna";
contexto.fillRect(200, 250, 50, 150);
contexto.closePath();

//dibujo de las hojas del arbol
contexto.beginPath();
contexto.moveTo(125, 250);
contexto.lineTo(275, 100);
contexto.lineTo(425, 250);
contexto.closePath();
contexto.fillStyle = "green";
contexto.fill();
contexto.strokeStyle = "darkgreen";
contexto.lineWidth = 3;
contexto.stroke();