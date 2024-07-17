<?php
    class Automovil{
        private $color;
        private $motor;
        private $marca;

        //constructor
        public function obtener_color(){
            return $this-> color;
        }
        public function __construct($color, $motor,$marca){
            $this ->color =$color;
            $this -> motor = $motor;
            $this -> marca = $marca;
        }

        //operaciones
        function getDatos(){
            return "marca: $this->marca, color: $this->color, motor: $this->motor";

        }


        function setColor($color){
            $this->color = $color;
        }
    }


    //prueba

    $auto1 = neW Automovil("rojo", "1.55", "Toyota"); 
    $auto2 = neW Automovil("gris", "1.55", "ford"); 
    $auto3 = neW Automovil("negro", "1.55", "peugeot"); 
    $auto4 = new Automovil("blanco", "1.55", "Toyota");

    echo $auto1 -> getDatos();
    echo "<br>";
    $auto1 -> setColor("Azul");
    echo $auto1 -> getdatos();
    echo "<br>";
    echo $auto2-> getDatos();


    echo "<br> <hr> <br><br> <br><b>colores disponibles</b>";
    echo "<hr> Toyota: " . $auto1->obtener_color() . " - ".$auto4->obtener_color();
    echo "<br>ford: " .$auto2->obtener_color();
    echo "<br> peugeot: " . $auto3->obtener_color();

?>