<?php

declare(strict_types=1);

class Inmobiliario{
    private int $codigoTpH;
    private int $camasSencillasIm;
    private int $camasDoblesIm;
    private int $camasTriplesIm;
    private int $camasMatrimonialesIm;

    public function __construct(int $codigoTpH, int $camasSencillasIm, int $camasDoblesIm, int $camasTriplesIm, int $camasMatrimonialesIm){

        $this->codigoTpH = $codigoTpH;
        $this->camasSencillasIm = $camasSencillasIm;
        $this->camasDoblesIm = $camasDoblesIm;             
        $this->camasTriplesIm = $camasTriplesIm;
        $this->camasMatrimonialesIm = $camasMatrimonialesIm;

    }

    //Codigo de la habitacion

    public function getCodigoTpH(){
        return $this->codigoTpH;
    }

    public function setCodigoTpH($codigoTpH){
        $this->codigoTpH = $codigoTpH;
    }

    //Camas Sencillas
    public function getCamasSencillasIm(){
        return $this->camasSencillasIm;
    }
    public function setCamasSencillasIm($camasSencillasIm){
        $this->camasSencillasIm = $camasSencillasIm;
    }

    //Camas Dobles
    public function getCamasDoblesIm(){
        return $this->camasDoblesIm;
    }
    public function setCamasDoblesIm($camasDoblesIm){
        $this->camasDoblesIm = $camasDoblesIm;
    }

    //Camas Triples
    public function getCamasTriplesIm(){
        return $this->camasTriplesIm;
    }
    public function setCamasTriplesIm($camasTriplesIm){
        $this->camasTriplesIm = $camasTriplesIm;
    }

    //Camas Matrimoniales
    public function getCamasMatrimonialesIm(){
        return $this->camasMatrimonialesIm;
    }
    public function setCamasMatrimonialesIm($camasMatrimonialesIm){
        $this->camasMatrimonialesIm = $camasMatrimonialesIm;
    }

}

?>