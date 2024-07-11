<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
<h1>Condicionales</h1>
   <h2>Validador de edades</h2>
   <?php 
    $Edad = 83 ;
   

    if ($Edad > 80 or $Edad < 11){
        echo ("Usted tienes: " . $Edad . " años, no es una edad permitida");

    }elseif($Edad >= 18){
       echo ("Tines " . $Edad ." años, eres mayor de edad, ACCESO PERMITIDO : ");
   
    }else{
       echo ("Uted tiene : " . $Edad ." años, es menor de esad, ACCESO DENEGADO ");
    }

    /* }else{
        echo ("Uted tiene : " . $Edad ." años, es menor de edad, ACCESO DENEGADO: ");
    }*/
   ?>
</body>
</html>