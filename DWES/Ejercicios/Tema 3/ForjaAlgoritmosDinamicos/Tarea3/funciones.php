<?php 
    function agregarItem(&$inventario, $nombre, $rareza = 'comun', $cantidad = 1){
        $id = count($inventario);

        if($rareza == 1){
            $rareza = 'comun';
        }elseif($rareza == 2){
            $rareza = 'raro';
        }else{
            $rareza = 'epico';
        }

        $nuevoItem = [
            'nombre' => $nombre,
            'cantidad' => $cantidad,
            'rareza' => $rareza
        ];

        $inventario[$id] = $nuevoItem;
        return $inventario;
    }

    function obtenerRarezaNumero($rareza){
        if(is_numeric($rareza)){
            return $rareza;
        }else{
            if($rareza == "comun"){
                return 1;
            }elseif($rareza == "raro"){
                return 2;
            }else{
                return 3;
            }
        }
    }

    function obtenerRarezaValor($rareza){
        $rarezaTexto = "";
        if($rareza == 1){
            $rarezaTexto = "comun";
        }elseif($rareza == 2){
            $rarezaTexto = "raro";
        }else{
            $rarezaTexto = "epico";
        }
        return $rarezaTexto;
    }

    function imprimirTablaFiltrada($inventario_filtrado){
        echo "<table border=1px solid black>";
        echo "<tr><th>ID</th><th>Item</th><th>Cantidad</th><th>Rareza</th></tr>";

        foreach($inventario_filtrado as $id => $item){
            $rarezaTexto = "";

            if($item['rareza'] == 1){
                $rarezaTexto = "comun";
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>".$item['nombre']."</td>";
                echo "<td>".$item['cantidad']."</td>";
                echo "<td>".$item['rareza']."</td>";
                echo "</tr>";
            }elseif($item['rareza'] >= 2){
                $rarezaTexto = "raro";
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>".$item['nombre']."</td>";
                echo "<td>".$item['cantidad']."</td>";
                echo "<td>".$item['rareza']."</td>";
                echo "</tr>";
            }elseif($item['rareza'] == 3){
                $rarezaTexto = "epico";
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>".$item['nombre']."</td>";
                echo "<td>".$item['cantidad']."</td>";
                echo "<td>".$item['rareza']."</td>";
                echo "</tr>";
            }
            
        }
        echo "</table>";
    }
?>