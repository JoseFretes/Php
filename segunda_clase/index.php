<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1 >Primer ejemplo de Php</h1>




<?php
$nombre = "josé";
$edad = "19";
echo "hola soy " . $nombre; 
echo "tengo" . $edad . "años";


?>

<h2>Operadores lógicos de Php</h2>

<?php
 $a = 8;
 $b = 9;

 echo "<h3> Operaciones aritméticas </h3>";
 echo "a = " . $a . "y b =" . $b;
 echo "<br> La suma de a + b es: " . ($a + $b);
 echo "<br> La resta de a - b es: " . ($a - $b);
 echo "<br> La división de a / b es: " . ($a / $b);
 echo "La multiplicación de a * b: " . ($a * $b);
 echo "<br> a ecponente b es: " . ($a ** $b);
 echo "<br> a resto b es: " . ($a % $b);

?>

<?php 
    $x = 8;
    $y = 3;

    echo "<h3> Operadores de comparación, lógicos etc...";

    echo "<br> <br> x = " . $x . ",y = " . $y;
    echo "<br> <br> ¿X es igual a Y?" . ($x == $y);
    echo "<br> <br> ¿X es distinto a Y?" . ($x != $y);
    echo "<br> <br> X es menor que Y?" . ($x < $y);
    echo "<br> <br> X es mayor o igual que Y?" . ($x >= $y);

    echo "<h3> Operadores lógicos Y,O, negación etc...";
    echo " <br> <br> A es igual a B o X es mayor a Y" . ($a == $b && $x > $y);
    echo "<br> <br>A es igual a B o X es igual a Y" . ($a == $b || $x == $y);
    echo "<br> <br> Negar (B igual a X)" . ! ($b == $x);
?>






</body>
</html>
