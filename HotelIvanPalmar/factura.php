<?php

declare(strict_types=1);

class Factura{
    private int $codigoFac;
    private int $codigoRes;
    private string $numeroDocumentoCli;
    private string $fechaEmisionFac;
    private float $valorTotalFac;

    public function __construct(int $codigoFac, int $codigoRes, string $numeroDocumentoCli,string $fechaEmisionFac, float $valorTotalFac){

        $this->codigoFac = $codigoFac;
        $this->codigoRes = $codigoRes;
        $this->numeroDocumentoCli = $numeroDocumentoCli;
        $this->fechaEmisionFac = $fechaEmisionFac;
        $this->valorTotalFac = $valorTotalFac;        

    }

    //Codigo de la factura

    public function getCodigoFac(){
        return $this->codigoFac;
    }

    public function setCodigoFac($codigoFac){
        $this->codigoFac = $codigoFac;
    }

    //Codigo de la reserva
    public function getCodigoRes(){
        return $this->codigoRes;
    }
    public function setCodigoRes($codigoRes){
        $this->codigoRes = $codigoRes;
    }

    //Numero de documento del cliente
    public function getNumeroDocumentoCli(){
        return $this->numeroDocumentoCli;
    }
    public function setNumeroDocumentoCli($numeroDocumentoCli){
        $this->numeroDocumentoCli = $numeroDocumentoCli;
    }

    //Fecha Emision
    public function getFechaEmisionFac(){
        return $this->fechaEmisionFac;
    }
    public function setFechaEmisionFac($fechaEmisionFac){
        $this->fechaEmisionFac = $fechaEmisionFac;
    }

    //Valor Total
    public function getValorTotalFac(){
        return $this->valorTotalFac;
    }
    public function setValorTotalFac($valorTotalFac){
        $this->valorTotalFac = $valorTotalFac;
    }

}

?>