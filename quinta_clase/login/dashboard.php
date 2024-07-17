<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion abierta</title>
    <style>
        .b{
            color:green;
        }
    </style>
</head>

<body>
    <?php
        if(isset($_POST['nombre'])){
            $_SESSION['nombre'] = $_POST['nombre'];
            echo "<h1>Bienvenido: <b class='b'>" . $_POST ['nombre']."</b></h1>";
            echo "m dolorum laudantium, quo distinctio maxime eligendi culpa consequatur eaque.lorem";
            print "<br> <br><a href='logout.php'>Cerrar sesion</a>";
            
            
        }else{
            if(isset($_SESSION['nombre'])){
                echo "Has iniciado sesion como" . $_SESSION['nombre'];
                echo "<p><a href='login.php'>Ir a la página inicial</a></p>";
                echo"<p><a href='logout.php'>Cerrar session</a></p>";
            }else{
                echo "<h1>Acceso restringido</h1>";
                echo "Debes iniciar sesion";
                echo "<br> <br><a href='login.php'>Iniciar sesion</a>";
            }
        }
    ?>
    <br>
   
    <br>
    
</body>
</html>