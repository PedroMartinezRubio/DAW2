<?php 
    function columnas($numero){
        echo "<table border='1' cellSpacing='0' cellPadding='5'>";
        for($i = 1; $i <= $numero; $i++){
            echo "<td>$i</td>";
        }
        echo "</table>";
    }
?>