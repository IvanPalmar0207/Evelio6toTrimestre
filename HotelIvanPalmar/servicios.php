<?php

declare(strict_types=1);

class Servicios{
    private int $idSer;
    private string $nombreSer;
    private string $descripcionSer;

    public function __construct(int $idSer, string $nombreSer, string $descripcionSer){

        $this->idSer = $idSer;
        $this->nombreSer = $nombreSer;
        $this->descripcionSer = $descripcionSer;             

    }

    //Codigo del servicio

    public function getIdSer(){
        return $this->idSer;
    }

    public function setIdSer($idSer){
        $this->idSer = $idSer;
    }

    //Nombre del Servicio
    public function getNombreSer(){
        return $this->nombreSer;
    }
    public function setNombreSer($nombreSer){
        $this->nombreSer = $nombreSer;
    }

    //Descripcion del servicio
    public function getDescripcionSer(){
        return $this->descripcionSer;
    }
    public function setDescripcionSer($descripcionSer){
        $this->descripcionSer = $descripcionSer;
    }
}

?>