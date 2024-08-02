<?php
session_start();

?>
<link rel="stylesheet" href="styles.css">

<?php
   header('Content-type: text/html; charset=utf-8');
   include "conexion.php"; 
  
   $consulta = "SELECT * FROM blog"; 
   $resultado = $conexion->query($consulta);
?>

<hr>

<form method="POST" action="guardar.php"> 
    
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="mensaje" placeholder="Mensaje"> 
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="submit" class="btn btn-success">Cancelar</button>
    <button><a href="blog.php"></a>Refresh</button>
    

</form>
<?php

    if ($resultado !== false && $resultado->num_rows > 0) {
        echo "<table>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$fila['ID']}</td>";
            echo "<td>{$fila['nombre']}</td>";
            echo "<td>{$fila['mensaje']}</td>";
            echo "</tr>";
        }
     
        echo "</table>";
    } else {
        echo "<p>No hay mensajes almacenados.</p>";
    }
?>


