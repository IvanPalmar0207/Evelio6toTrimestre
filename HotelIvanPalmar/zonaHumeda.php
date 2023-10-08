<?php

declare(strict_types=1);
class ZonaHumeda{
    private int $codigoZn;
    private string $nombreZn;
    private string $descripcionZn;
    private string $UbicacionZn;
    private string $imagenZn;

    public function __construct(int $codigoZn, string $nombreZn, string $descripcionZn, string $UbicacionZn, string $imagenZn){

        $this->codigoZn = $codigoZn;
        $this->nombreZn = $nombreZn;
        $this->descripcionZn = $descripcionZn;        
        $this->UbicacionZn = $UbicacionZn;
        $this->imagenZn = $imagenZn;

    }

    //Codigo 

    public function getCodigoZn(){
        return $this->codigoZn;
    }

    public function setCodigoZn($codigoZn){
        $this->codigoZn = $codigoZn;
    }

    //Nombre
    public function getNombreZn(){
        return $this->nombreZn;
    }
    public function setNombreZn($nombreZn){
        $this->nombreZn = $nombreZn;
    }

    //Descripcion
    public function getDescripcionZn(){
        return $this->descripcionZn;
    }
    public function setDescripcionZn($descripcionZn){
        $this->descripcionZn = $descripcionZn;
    }

    //Ubicacion
    public function getUbicacionZn(){
        return $this->UbicacionZn;
    }
    public function setUbicacionZn($UbicacionZn){
        $this->UbicacionZn = $UbicacionZn;
    }

    //Imagen
    public function getImagenZn(){
        return $this->imagenZn;
    }   
    public function setImagenZn($imagenZn){
        $this->imagenZn = $imagenZn;
    }
}

?>