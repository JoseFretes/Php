<?php
header('Content-type: text/html; charset=utf-8');
include "conexion.php";
$consulta = "SELECT * FROM cliente;";
$result_set = $conexion->query($consulta);

if ($result_set->num_rows > 0) {
    echo "<table class='table table-light'>";
    while ($f = $result_set->fetch_assoc()) {
        $ci= $f['cedula'];
        echo "<tr>";
        echo "<td> " . $ci . " </td>";
        echo "<td> " . $f['nombreapellido'] . " </td>";kbvgvjhgv
"<hr>

<form action="guardarcontroller.php" method="POST">
    <input type="text" name="cedula" placeholder="Número de cédula">
    <input type="text" name="nombreapellido" placeholder="Nombre">
    <input type="text" name="telefono" placeholder="Teléfono">
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="submit" class="btn btn-success">Cancelar</button>
</form>
