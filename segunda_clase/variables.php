<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar dos números</title>
</head>
<body>
    
<h1>Variables</h1>
<h1>Comparar números</h1>
   
   <?php 
    $numero1 = 10; 
    $numero2 = 20;
   
   
    if($numero1 > $numero2){
       echo ("el numero: " . $numero1 ." es mayor que: " . $numero2);
   
    }else{
       echo ("el numero: " . $numero2 ." es mayor que: " . $numero1);
    }
   ?>
</body>
</html>