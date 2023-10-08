<?php

declare(strict_types=1);

class Reserva{
    private int $codigoRes;
    private string $fechaInicioRes;
    private string $fechaSalidaRes;
    private int $cantidadJovenesRes;
    private int $cantidadAdultosRes;
    private string $estadoRes;
    private string $numeroDocumentoCli;

    public function __construct(int $codigoRes, string $fechaInicioRes, string $fechaSalidaRes,int $cantidadJovenesRes, int $cantidadAdultosRes, string $estadoRes, string $numeroDocumentoCli){

        $this->codigoRes = $codigoRes;
        $this->fechaInicioRes = $fechaInicioRes;
        $this->fechaSalidaRes = $fechaSalidaRes;
        $this->cantidadJovenesRes = $cantidadJovenesRes;
        $this->cantidadAdultosRes = $cantidadAdultosRes;
        $this->estadoRes = $estadoRes;
        $this->numeroDocumentoCli = $numeroDocumentoCli;        

    }

    //Codigo de la reserva
    public function getCodigoRes(){
        return $this->codigoRes;
    }
    public function setCodigoRes($codigoRes){
        $this->codigoRes = $codigoRes;
    }

    //Fecha de inicio

    public function getFechaInicioRes(){
        return $this->fechaInicioRes;
    }

    public function setFechaInicioRes($fechaInicioRes){
        $this->fechaInicioRes = $fechaInicioRes;
    }


    //Fecha de salida
    public function getFechaSalidaRes(){
        return $this->fechaSalidaRes;
    }
    public function setFechaSalidaRes($fechaSalidaRes){
        $this->fechaSalidaRes = $fechaSalidaRes;
    }

    //Cantidad de jovenes
    public function getCantidadJovenesRes(){
        return $this->cantidadJovenesRes;
    }
    public function setCantidadJovenesRes($cantidadJovenesRes){
        $this->cantidadJovenesRes = $cantidadJovenesRes;
    }

    //Cantidad de adultos
    public function getCantidadAdultosRes(){
        return $this->cantidadAdultosRes;
    }
    public function setCantidadAdultosRes($cantidadAdultosRes){
        $this->cantidadAdultosRes = $cantidadAdultosRes;
    }

    //Estado de la reserva
    public function getEstadoRes(){
        return $this->estadoRes;
    }
    public function setEstadoRes($estadoRes){
        $this->estadoRes = $estadoRes;
    }

    //Numero de documento del cliente

    public function getNumeroDocumentoCli(){
        return $this->numeroDocumentoCli;
    }
    public function setNumeroDocumentoCli($numeroDocumentoCli){
        $this->numeroDocumentoCli = $numeroDocumentoCli;
    }


}

?>