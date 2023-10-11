<?php

class Programa{
    private string $codigoPrograma;
    private string $nombrePrograma;
    public function __construct(string $codigoPrograma, string $nombrePrograma){
        
        $this->codigoPrograma = $codigoPrograma;
        $this->nombrePrograma = $nombrePrograma;

    }

    //Codigo del programa
    public function getCodigoPrograma(){
        return $this->codigoPrograma;
    }
    public function setCodigoPrograma($codigoPrograma){
        $this->codigoPrograma = $codigoPrograma;
    }

    //Nombre del programa
    public function getNombrePrograma(){
        return $this->nombrePrograma;
    }
    public function setNombrePrograma($nombrePrograma){
        $this->nombrePrograma = $nombrePrograma;
    }

}

?>