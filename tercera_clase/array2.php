<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array2</title>
</head>
<body>
    <?php
        $edades = array("José" => "19", "Camila" => "25", "Samanta" => "19");
        echo  "Camila tiene " . $edades['Camila'] . " años";
    


        foreach($edades as $x => $edad){
            echo "<br>Clave: " . $x . " ,valor= " .$edad;
           
        }
    ?>


</body>
</html> 