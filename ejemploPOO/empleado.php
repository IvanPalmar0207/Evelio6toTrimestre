<?php

require('persona.php');

class Empleado extends Persona{
    private string $cargoEmp;
    private float $salarioEmp;

    public function __construct(string $numeroDocumentoPer,string $tipoDocumentoPer, string $nombrePer, string $apellidoPer,string $generoPer, string $fechaNacimientoPer,string $cargoEmp, float $salarioEmp){

        //Lamar el constructor de la Super clase

        parent::__construct($numeroDocumentoPer,$tipoDocumentoPer,$nombrePer,$apellidoPer,$generoPer, $fechaNacimientoPer);
        //Definir los atributos de la subclase
        $this->cargoEmp = $cargoEmp;
        $this->salarioEmp = $salarioEmp;

    }

    //Cargo del Empleado

    public function getCargpEmp(){
        return $this->cargoEmp;
    }

    public function setCargoEmp($cargoEmp){
        $this->cargoEmp = $cargoEmp;
    }

    //Tipo de documento
    public function getSalarioEmp(){
        return $this->salarioEmp;
    }
    public function setSalarioEmp($salarioEmp){
        $this->salarioEmp = $salarioEmp;
    }

}

?>