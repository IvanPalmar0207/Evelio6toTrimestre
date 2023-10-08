<?php

class Computador{

    private string $tipoProcesador;
    private string $marcaProcesador;
    private string $tipoMemoria;
    private int $capacidadMemoria;
    private string $tipoAlmacenamiento;
    private int $capacidadAlmacenamiento;

    public function __construct(string $tipoProcesador, string $marcaProcesador, string $tipoMemoria, int $capacidadMemoria, string $tipoAlmacenamiento, int $capacidadAlmacenamiento){        

        $this->tipoProcesador = $tipoProcesador;
        $this->marcaProcesador = $marcaProcesador;
        $this->tipoMemoria = $tipoMemoria;
        $this->capacidadMemoria = $capacidadMemoria;
        $this->tipoAlmacenamiento = $tipoAlmacenamiento;
        $this->capacidadAlmacenamiento = $capacidadAlmacenamiento;

    }

    //Tipo de procesador
    public function getTipoProcesador(){
        return $this->tipoProcesador;
    }
    public function setTipoProcesador($tipoProcesador){
        $this->tipoProcesador = $tipoProcesador;
    }

    //Marca del procesador
    public function getMarcaProcesador(){
        return $this->marcaProcesador;
    }
    public function setMarcaProcesador($marcaProcesador){
        $this->marcaProcesador = $marcaProcesador;
    }

    //Tipo de memoria
    public function getTipoMemoria(){
        return $this->tipoMemoria;
    }
    public function setTipoMemoria($tipoMemoria){
        $this->tipoMemoria = $tipoMemoria;
    }

    //Capacidad de la memoria
    public function getCapacidadMemoria(){
        return $this->capacidadMemoria;
    }
    public function setCapacidadMemoria($capacidadMemoria){
        $this->capacidadMemoria = $capacidadMemoria;
    }

    //Tipo de almacenamiento
    public function getTipoAlmacenamiento(){
        return $this->tipoAlmacenamiento;
    }
    public function setTipoAlmacenamiento($tipoAlmacenamiento){
        $this->tipoAlmacenamiento = $tipoAlmacenamiento;
    }

    //Capacidad de almacenamiento
    public function getCapacidadAlmacenamiento(){
        return $this->capacidadAlmacenamiento;
    }
    public function setCapacidadAlmacenamiento($capacidadAlmacenamiento){
        $this->capacidadAlmacenamiento = $capacidadAlmacenamiento;
    }

}

?>