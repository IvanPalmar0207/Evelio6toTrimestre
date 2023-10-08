<?php

declare(strict_types=1);

class Habitacion{
    private int $codigoTpH;
    private float $valorBaseHab;
    private float $valorTotalHab;

    public function __construct(int $codigoTpH, float $valorBaseHab, float $valorTotalHab){

        $this->codigoTpH = $codigoTpH;
        $this->valorBaseHab = $valorBaseHab;
        $this->valorTotalHab = $valorTotalHab;             

    }

    //Codigo de la habitacion

    public function getCodigoTpH(){
        return $this->codigoTpH;
    }

    public function setCodigoTpH($codigoTpH){
        $this->codigoTpH = $codigoTpH;
    }

    //Valor Base
    public function getValorBaseHab(){
        return $this->valorBaseHab;
    }
    public function setValorBaseHab($valorBaseHab){
        $this->valorBaseHab = $valorBaseHab;
    }

    //Valor Total
    public function getValorTotalHab(){
        return $this->valorTotalHab;
    }
    public function setValorTotalHab($valorTotalHab){
        $this->valorTotalHab = $valorTotalHab;
    }
}

?>