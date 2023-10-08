<?php

declare(strict_types=1);
class Bar{
    private int $codigoBr;
    private string $nombreBr;
    private string $descripcionBr;
    private string $marcaBr;
    private float $precioBr;
    private string $imagenBr;

    public function __construct(int $codigoBr, string $nombreBr, string $descripcionBr, string $marcaBr, float $precioBr, string $imagenBr){

        $this->codigoBr = $codigoBr;
        $this->nombreBr = $nombreBr;
        $this->descripcionBr = $descripcionBr;
        $this->marcaBr = $marcaBr;
        $this->precioBr = $precioBr;
        $this->imagenBr = $imagenBr;

    }

    //Codigo 

    public function getCodigoBr(){
        return $this->codigoBr;
    }

    public function setCodigoBr($codigoBr){
        $this->codigoBr = $codigoBr;
    }

    //Nombre
    public function getNombreBr(){
        return $this->nombreBr;
    }
    public function setNombreBr($nombreBr){
        $this->nombreBr = $nombreBr;
    }

    //Descripcion
    public function getDescripcionBr(){
        return $this->descripcionBr;
    }
    public function setDescripcionBr($descripcionBr){
        $this->descripcionBr = $descripcionBr;
    }

    //Marca
    public function getMarcaBr(){
        return $this->marcaBr;
    }
    public function setMarcaBr($marcaBr){
        $this->marcaBr = $marcaBr;
    }

    //Precio
    public function getPrecioBr(){
        return $this->precioBr;
    }
    public function setPrecioBr($precioBr){
        $this->precioBr = $precioBr;
    }

    //Imagen
    public function getImagenBr(){
        return $this->imagenBr;
    }   
    public function setImagenBr($imagenBr){
        $this->imagenBr = $imagenBr;
    }
}

?>