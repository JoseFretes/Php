<?php
include("conexion.php");

if (isset($_POST['cedula'])&& isset($_POST['nombre'])){
    $cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$sentencia ="INSERT INTO clientes VALUES ($cedula, $nombre, $telefono)";


$conexion->query($sentencia);
$conexion->close();

header("Location: index.php");

}
if(isset($_GET['delete_cedula'])){
    $ci = $_GET['delete_cedula'];
    $sentencia = "DELETE FROM cliente WHERE cedula = $ci";
    $conexion -> query($sentencia);

    $conexion->close();
    header("Location: index.php");
}

exit();