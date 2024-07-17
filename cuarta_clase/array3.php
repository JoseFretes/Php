<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <?php
        $producto = array(
            array("Heladera",2500,15), array("Microondas",1200,3), array("cocina",4500,5), array("horno",3000,12)
        );


        for($x = 0; $x < count($producto); $x++){
           for($y = 0; $y < count($producto[$x]); $y++){
                print($producto[$x][$y]." - ");
            }
        }

        echo "<hr>";
        foreach($producto as $p){
            foreach($p as $item){
                print($item. " | ");
            }
        }

    ?>
</body>
</html>