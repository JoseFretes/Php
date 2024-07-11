<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días de la semana</title>
    <style>
        .dia{
            color:red;
        }

    </style>
</head>
<body>
    <?php
       $dia = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

        $mes = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre"."octubre","noviembre","diciembre");

    $hoy = date("N") -1;
    echo ("El valor de hoy es: " .$hoy);
    echo ("<br> Hoy es: "."<b class='dia'>".$dia[$hoy] . "</b>");
    echo " <br> mes: " . "<b class= 'dia'>". $mes[date("n") - 1] , "</b>";

    echo ("<h4> Los días son: </h4>");
    for($x = 0; $x < count($dia); $x++){
        if ($x == $hoy){
            echo ("<b class='dia'> ".$dia[$x]."</b> ");
        }else{
            echo ("<p>".$dia[$x]."<p> ");
        }
    }
    ?>
</body>
</html>