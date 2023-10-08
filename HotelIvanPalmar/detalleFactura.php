<?php

declare(strict_types=1);

class DetalleFactura{
    private int $codigoFac;
    private string $nombreDet;
    private int $cantidadDet;
    private string $fechaDet;
    private float $valorUnitarioDet;

    public function __construct(int $codigoFac, string $nombreDet, int $cantidadDet, string $fechaDet, float $valorUnitarioDet){

        $this->codigoFac = $codigoFac;
        $this->nombreDet = $nombreDet;
        $this->cantidadDet = $cantidadDet;
        $this->fechaDet = $fechaDet;
        $this->valorUnitarioDet = $valorUnitarioDet;        

    }

    //Codigo

    public function getCodigoFac(){
        return $this->codigoFac;
    }

    public function setCodigoFac($codigoFac){
        $this->codigoFac = $codigoFac;
    }

    //Nombre
    public function getNombreDet(){
        return $this->nombreDet;
    }
    public function setNombreDet($nombreDet){
        $this->nombreDet = $nombreDet;
    }

    //Cantidad
    public function getCantidadDet(){
        return $this->cantidadDet;
    }
    public function setCantidadDet($cantidadDet){
        $this->cantidadDet = $cantidadDet;
    }

    //Fecha
    public function getFechaDet(){
        return $this->fechaDet;
    }
    public function setFechaDet($fechaDet){
        $this->fechaDet = $fechaDet;
    }

    //Valor unitario 
    public function getValorUnitarioDet(){
        return $this->valorUnitarioDet;
    }
    public function setValorUnitarioDet($valorUnitarioDet){
        $this->valorUnitarioDet = $valorUnitarioDet;
    }

}

?>