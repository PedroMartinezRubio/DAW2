<?php 
function mostrar($h, $v){
    echo "<b> X </b>";
    for($i = 1; $i <= $h; $i++){
        echo "<b> $i </b>";
    }
    echo "<br>";
    for ($i = 1; $i <= $h; $i++){ 
        echo "<b> $i </b>";
        for($j = 1; $j <= $v; $j++){
            echo $i * $j." ";
        }
        echo "<br>";
    }
}
?>