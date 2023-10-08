<?php

//Importe de la Super Clase
require_once('Automotor.php');

class Camion extends Automotor{

    private int $numeroEjes;
    private int $capacidadCarga;

    public function __construct(string $marca, int $modelo, float $precio, int $numeroEjes, int $capacidadCarga){
        parent::__construct($marca, $modelo, $precio);

        $this->numeroEjes = $numeroEjes;
        $this->capacidadCarga = $capacidadCarga;

    }

    //Numero de ejes
    public function getNumeroEjes(){
        return $this->numeroEjes;
    }
    public function setNumeroEjes($numeroEjes){
        $this->numeroEjes = $numeroEjes;
    }

    //Capacidad de carga
    public function getCapacidadCarga(){
        return $this->capacidadCarga;
    }
    public function setCapacidadCarga($capacidadCarga){
        $this->capacidadCarga = $capacidadCarga;
    }

    //Mostrar los datos
    public function mostrarDatos(){
        echo '<h2>'.'<b>'.'CAMIONES'.'</b>'.'</h2>';        
        echo 'La marca del automotor es: '. $this->getMarca() .'<br>';
        echo 'El modelo del automotor es: '.$this->getModelo().'<br>';
        echo 'El precio del automotor es: '.$this->getPrecio().'<br>';
        echo 'El numero de ejes del camion son: '. $this->numeroEjes.'<br>';
        echo 'La capacidad de carga del camion es: '. $this->capacidadCarga.'<br>';
    }
}

?>