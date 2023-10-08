<?php

class Vuelo{

    private string $puertoOrigen;
    private string $puertoDestino;
    private string $fechaVuelo;
    private string $horaVuelo;

    public function __construct(string $puertoOrigen, string $puertoDestino, string $fechaVuelo, string $horaVuelo){

        $this->puertoOrigen = $puertoOrigen;
        $this->puertoDestino = $puertoDestino;
        $this->fechaVuelo = $fechaVuelo;
        $this->horaVuelo = $horaVuelo;        

    }

    //Puerto de origen
    public function getPuertoOrigen(){
        return $this->puertoOrigen;
    }
    public function setPuertoOrigen($puertoOrigen){
        $this->puertoOrigen = $puertoOrigen;
    }

    //Puerto de destino
    public function getPuertoDestino(){
        return $this->puertoDestino;
    }
    public function setPuertoDestino($puertoDestino){
        $this->puertoDestino = $puertoDestino;
    }

    //Fecha de vuelo 
    public function getFechaVuelo(){
        return $this->fechaVuelo;
    }
    public function setFechaVuelo($fechaVuelo){
        $this->fechaVuelo = $fechaVuelo;        
    }

    //Hora de vuelo

    public function getHoraVuelo(){
        return $this->horaVuelo;
    }
    public function setHoraVuelo($horaVuelo){
        $this->horaVuelo = $horaVuelo;
    }

}

?>