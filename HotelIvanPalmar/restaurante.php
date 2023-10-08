<?php

declare(strict_types=1);
class Restaurante{
    private int $codigoRs;
    private string $nombreRs;
    private string $descripcionRs;
    private float $precioRs;
    private string $imagenRs;

    public function __construct(int $codigoRs, string $nombreRs, string $descripcionRs, float $precioRs, string $imagenRs){

        $this->codigoRs = $codigoRs;
        $this->nombreRs = $nombreRs;
        $this->descripcionRs = $descripcionRs;        
        $this->precioRs = $precioRs;
        $this->imagenRs = $imagenRs;

    }

    //Codigo 

    public function getCodigoRs(){
        return $this->codigoRs;
    }

    public function setCodigoRs($codigoRs){
        $this->codigoRs = $codigoRs;
    }

    //Nombre
    public function getNombreRs(){
        return $this->nombreRs;
    }
    public function setNombreRs($nombreRs){
        $this->nombreRs = $nombreRs;
    }

    //Descripcion
    public function getDescripcionRs(){
        return $this->descripcionRs;
    }
    public function setDescripcionRs($descripcionRs){
        $this->descripcionRs = $descripcionRs;
    }

    //Precio
    public function getPrecioRs(){
        return $this->precioRs;
    }
    public function setPrecioRs($precioRs){
        $this->precioRs = $precioRs;
    }

    //Imagen
    public function getImagenRs(){
        return $this->imagenRs;
    }   
    public function setImagenRs($imagenRs){
        $this->imagenRs = $imagenRs;
    }
}

?>