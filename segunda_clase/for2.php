<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .estilo_par{
            color:red;
        }
        .estilo_impar{
            color:green;
        }
    </style>
</head>
<body>
    <?php
        for($x = 1; $x <=100; $x++){
            echo "<div style='display: inline-block; margin-right: 20px;'>";
            if ($x % 3 == 0){
                
                echo "<p class='estilo_par'>$x </p>";
               
            }else{
                echo "<p class='estilo_impar'>$x </p>";
            } 
            echo "</div>";
        }
    ?>
</body>
</html>