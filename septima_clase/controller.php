<?php
include ('models.php');
$clientes = array();

if(isset($_POST['cliente'])){

    agregarClientes();
}

function agregarClientes(){
    global $clientes;
    if (isset($_POST)){
        $clientes = new Cliente(
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['fecha_nac'],
            $_POST['cedula'],
            $_POST['direccion'],

        );
        array_push($clientes, $cliente);
        }
    }
