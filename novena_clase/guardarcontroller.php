<?php

if($_POST){
    include 'conexion.php';
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombreapellido'];
    $telefono = $_POST['telefono'];
    


    $sql = "INSERT INTO cliente VALUES('$cedula', '$nombre', '$telefono')";
    $conexion->query($sql);
    mysqli_close($conexion);
}

header("Location: index.php");
exit;