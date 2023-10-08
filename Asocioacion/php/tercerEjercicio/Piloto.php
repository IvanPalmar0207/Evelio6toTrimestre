<?php

class Piloto{

    private string $nombrePiloto;
    private $aeronave = [];
    private $vuelo = [];

    public function __construct(string $nombrePiloto){

        $this->nombrePiloto = $nombrePiloto;

    }

    //Nombre del Piloto
    public function getNombrePiloto(){
        return $this->nombrePiloto;
    }
    public function setNombrePiloto($nombrePiloto){
        $this->nombrePiloto = $nombrePiloto;
    }

    //Agregar y visualizar vuelos
    public function agregarVuelos($vuelos){
        array_push($this->vuelo,$vuelos);
    }
    public function verVuelos(){
        return $this->vuelo;
    }

    //Agregar y visualizar 
    public function agregarAeronaves($aeronaves){
        array_push($this->aeronave,$aeronaves);
    }
    public function verAeronaves(){
        return $this->aeronave;
    }

}

?>