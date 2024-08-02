<?php
include "conexion.php";
var_dump($_POST);
if($_POST){
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO blog (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
$resultado = $conexion->query($sql);


}
header("Location: blog.php");
exit;
?>

