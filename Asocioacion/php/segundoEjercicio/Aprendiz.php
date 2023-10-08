<?php

class Aprendiz{

    private string $nombreAprendiz;
    private $computadora = [];

    public function __construct(string $nombreAprendiz){

        $this->nombreAprendiz = $nombreAprendiz;

    }

    //Nombre del aprendiz

    public function getNombreAprendiz(){
        return $this->nombreAprendiz;
    }

    public function setNombreAprendiz($nombreAprendiz){
        $this->nombreAprendiz = $nombreAprendiz;
    }

    //Agregar computadoras

    public function agregarComputadora($computadoras){
        array_push($this->computadora,$computadoras);
    }

    //Ver computadoras

    public function verComputadoras(){
        return $this->computadora;
    }

}

?>