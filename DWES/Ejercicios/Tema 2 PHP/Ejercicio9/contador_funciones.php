<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function cuenta($a, $b){
            
            if($a>$b){
                while($a>=$b){
                    echo $a.", ";
                    $a--;
                }
            }else {
                while($a<=$b){
                    echo $a.", ";
                    $a++;
                }
            }
        }

        cuenta(20, 10);
    ?>
</body>
</html>