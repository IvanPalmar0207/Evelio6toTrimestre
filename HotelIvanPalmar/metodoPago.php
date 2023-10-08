<?php

declare(strict_types=1);

class MetodoPago{
    private int $codigoMet;
    private string $tipoMet;    

    public function __construct(int $codigoMet, string $tipoMet){

        $this->codigoMet = $codigoMet;
        $this->tipoMet = $tipoMet;    

    }

    //Codigo del metodo de pago

    public function getCodigoMet(){
        return $this->codigoMet;
    }

    public function setCodigoMet($codigoMet){
        $this->codigoMet = $codigoMet;
    }

    //Tipo del metodo de pago
    public function getTipoMet(){
        return $this->tipoMet;
    }
    public function setTipoMet($tipoMet){
        $this->tipoMet = $tipoMet;
    }

}

?>