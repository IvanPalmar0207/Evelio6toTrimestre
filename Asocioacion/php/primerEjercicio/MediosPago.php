<?php

class MediosPago{

    private string $nombreMedio;

    public function __construct(string $nombreMedio){
        
        $this->nombreMedio = $nombreMedio;

    }

    //Nombre del medio de pago
    public function getNombreMedio(){
        return $this->nombreMedio;
    }
    public function setNombreMedio($nombreMedio){
        $this->nombreMedio = $nombreMedio;
    }

}

?>