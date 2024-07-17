<?php
abstract class Persona {
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $Cedula;

    public function __construct($nombre, $apellido, $fechaNacimiento, $Cedula) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->Cedula = $Cedula;
    }
    public function setNombre(){
        $this->nombre = $nombre;
    }
    public function getNombre() {
        return $this->nombre;  
    }
    public function setApellido(){
        $this->Apellido = $apellido;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function setFecha(){
        $this->FechaNacimiento = $fechaNacimiento;
    }
    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }
    public function setCedula(){
        $this -> cedula = $Cedula;
    }
    public function getNumeroCedula() {
        return $this->Cedula;
    }
}




class Cliente extends Persona {
    private $telefono;
    private $Direccion;

    public function __construct($nombre, $Apellido, $fechaNacimiento, $Cedula, $telefono, $Direccion) {
        parent :: __construct($nombre,$Apellido, $fechaNacimiento, $Cedula, $telefono);
        $this->telefono = $telefono;
        $this->Direccion = $Direccion;
    }
    public function setTelefono(){
        $this -> telefono =$telefono;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function setDireccion(){
        $this -> Direccion =$Direccion;
    }
    public function getDireccion() {
        return $this->Direccion;
    }
     public function getValor() {
        return "Nombre: " .parent :: getNombre(). ", Direccion:  $this->Direccion, telefono: $this->telefono";
    }
}



?>
