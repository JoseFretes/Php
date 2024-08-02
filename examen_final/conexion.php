<?php
include "vars.php";
$conexion = new  mysqli($host, $user, $password, $database, $port);

if ($conexion -> error){
    echo "Lista de clientes:❌❌❌";

}else {
    echo "Lista de clientes: ✔✔✔  <br/> <br/>";
}