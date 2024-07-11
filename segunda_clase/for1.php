

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <?php

    for ($i = 9; $i >= 1; $i--) {
        echo "<div style='display: inline-block; margin-right: 20px;'>";
        echo "<h2>Tabla del $i:</h2>";
        for ($x = 0; $x <= 10; $x++) {
            echo "$i por $x = " . ($i * $x) . "<br>";
        }
        echo "</div>";
    }
       
    ?>
</body>
</html>
