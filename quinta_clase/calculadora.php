<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <form method="get" action="calculadora.php">
        <label for="nro1">Primer número:</label>
        <input type="number" id="nro1" name="nro1" value="0">
        
        <label for="nro2">Segundo número:</label>
        <input type="number" id="nro2" name="nro2" value="0">
        
        <button type="submit">Sumar</button>
    </form>

    <?php
    $resultado = 0;
    $n1=0;
    $n2=0;
        if (isset($_GET['nro1']) && isset($_GET['nro2'])) {
            $n1 = $_GET['nro1'];
            $n2 = $_GET['nro2'];
        

            if (!empty($n1) && !empty($n2)) {
                $resultado = $n1 + $n2;
            } else {
                echo ("<br><p>Por favor, ingrese ambos números.</p>");
                $resultado = 0;
                $n1=0;
                $n2=0;
            }
        } else {
            $resultado = 0; 
            $n1=0;
            $n2=0;
        }
    ?>

    <br>
    <input type="number" id="resultado" value="<?php echo $resultado; ?>" disabled>
  
</body>
</html>
