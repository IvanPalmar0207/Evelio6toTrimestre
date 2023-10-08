<?php

//Importe de la Super Clase
require_once('Automotor.php');

class Automovil extends Automotor{

    private string $tipo;
    private string $color;

    public function __construct(string $marca, int $modelo, float $precio, string $tipo, string $color){
        parent::__construct($marca, $modelo, $precio);
        
        $this->tipo = $tipo;
        $this->color = $color;

    }

    //Tipo de automovil
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    //Color del automovil
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }

    //Metodo para mostrar datos
    public function mostrarDatos(){
        echo '<h2>'.'<b>'.'AUTOMOVILES'.'</b>'.'</h2>';        
        echo 'La marca del automotor es: '. $this->getMarca() .'<br>';
        echo 'El modelo del automotor es: '.$this->getModelo().'<br>';
        echo 'El precio del automotor es: '.$this->getPrecio().'<br>';
        echo 'El tipo de automovil es: '. $this->tipo.'<br>';
        echo 'El color del automovil es: '. $this->color.'<br>';
    }

}

?>