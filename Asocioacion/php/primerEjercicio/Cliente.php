<?php

class Cliente{

    private string $nombreCliente;
    private $mediosPago = [];

    public function __construct(string $nombreCliente){

        $this->nombreCliente = $nombreCliente;

    }

    //Nombre del cliente

    public function getNombreCliente(){
        return $this->nombreCliente;
    }

    public function setNombreCliente($nombreCliente){
        $this->nombreCliente = $nombreCliente;
    }

    //Metodo para agregar y ver  metodos de pago
    public function agregarMedioPago($medio){
        array_push($this->mediosPago,$medio);
    }

    public function verMediosPago(){
        return $this->mediosPago;
    }

}

?>