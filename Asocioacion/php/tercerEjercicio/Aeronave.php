<?php

class Aeronave{

    private string $numeroMatricula;
    private string $nombreOperador;
    private string $fabricanteNave;
    private int $modeloNave;

    public function __construct(string $numeroMatricula, string $nombreOperador, string $fabricanteNave, int $modeloNave){

        $this->numeroMatricula = $numeroMatricula;
        $this->nombreOperador = $nombreOperador;
        $this->fabricanteNave = $fabricanteNave;
        $this->modeloNave = $modeloNave;

    }

    //Numero de la matricula
    public function getNumeroMatricula(){
        return $this->numeroMatricula;
    }
    public function setNumeroMatricula($numeroMatricula){
        $this->numeroMatricula = $numeroMatricula;
    }

    //Nombre del operador
    public function getNombreOperador(){
        return $this->nombreOperador;
    }
    public function setNombreOperador($nombreOperador){
        $this->nombreOperador = $nombreOperador;
    }

    //Fabricante de la nave
    public function getFabricanteNave(){
        return $this->fabricanteNave;
    }
    public function setFabricanteNave($fabricanteNave){
        $this->fabricanteNave = $fabricanteNave;
    }

    //Modelo de la nave

    public function getModeloNave(){
        return $this->modeloNave;
    }
    public function setModeloNave($modeloNave){
        $this->modeloNave = $modeloNave;
    }
}

?>