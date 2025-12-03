<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El Archivo Maestro del Gremio</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Nombre item:</label>
        <input type="text" name="nombre">
        <br>
        <select name="rareza">
            <option value="1">Comun</option>
            <option value="2">Raro</option>
            <option value="3">Epico</option>
        </select>
        <br>
        <input type="submit" value="Introducir">
    </form>
    <?php 
        if($_POST){
            include 'funciones.php';
            $nombre = $_POST['nombre'];
            $rareza = $_POST['rareza'];
            $inventario = [
                0 => ['nombre' => 'pocion', 'cantidad' => 3, 'rareza' => 'comun'],
                1 => ['nombre' => 'pechera', 'cantidad' => 1, 'rareza' => 'raro'],
                2 => ['nombre' => 'baston', 'cantidad' => 1, 'rareza' => 'epico']
            ];
            $inventario_filtrado = [];
            try{
                if(empty($nombre)){
                    throw new Exception("El campo del nombre no puede estar vacio.");
                }elseif(is_numeric($nombre)){
                    throw new Exception("El valor introducido en el campo nombre no es valido.");
                }else{
                     $inventario = agregarItem($inventario, $nombre, $rareza);
                     
                     foreach($inventario as $id => $item){
                        $rarezaTexto = obtenerRarezaValor($item['rareza']);
                        $rarezaNumero = obtenerRarezaNumero($item['rareza']);
                        if($rarezaNumero >= $rareza){
                            $inventario_filtrado[$id] = $item;
                        }
                     }

                     echo "<table border=1px solid black>";
                     echo "<tr><th>ID</th><th>Item</th><th>Cantidad</th><th>Rareza</th></tr>";
                     foreach($inventario as $id => $item){
                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>".$item['nombre']."</td>";
                        echo "<td>".$item['cantidad']."</td>";
                        echo "<td>".$item['rareza']."</td>";
                        echo "</tr>";
                     }
                     echo "</table>";
                     echo "<br>";
                     echo "<h2>Inventario filtrado</h2>";
                     echo "<br>";

                     imprimirTablaFiltrada($inventario_filtrado);

                }


            }catch(Exception $e){
                echo "Ha ocurrido un error: " . $e->getMessage() . " Espere unos segundos";
                header("refresh: 4 form.php");
            }            
        }
    ?>
</body>
</html>