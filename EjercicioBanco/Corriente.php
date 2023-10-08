<?php

require_once('Cuenta.php');

//Cuenta Corriente

class Corriente extends Cuenta{

    private string $numeroChequera;
    private string $fechaEmision;    

    public function __construct($numeroCuenta, $saldoPesos, $saldoDolares, string $numeroChequera, string $fechaEmision){

        parent::__construct($numeroCuenta,$saldoPesos,$saldoDolares);

        $this->numeroCuenta = $numeroCuenta;
        $this->saldoPesos = $saldoPesos;
        $this->saldoDolares = $saldoDolares;
        $this->numeroChequera = $numeroChequera;
        $this->fechaEmision = $fechaEmision;


    }

    //Sucursal de apertura
    public function getNumeroChequera(){
        return $this->numeroChequera;
    }
    public function setNumeroChquera($numeroChequera){
        $this->numeroChequera = $numeroChequera;
    }

    //Fecha de apertura
    public function getFechaEmision(){
        return $this->fechaEmision;
    }
    public function setFechaEmision($fechaEmision){
        $this->fechaEmision = $fechaEmision;
    }

    //Metodo para mostrar la informacion

    public function mostrarDatos(){
        echo '<h2>'.'<b>'.'Datos de la Cuenta Corriente'.'</b>'.'</h2>';
        echo '<b>'.'El numero de cuenta es: '.'</b>'.$this->numeroCuenta.'<br>';
        echo '<b>'.'El saldo en pesos es: '.'</b>'.$this->saldoPesos.'<br>';
        echo '<b>'.'El saldo en dolares es: '.'</b>'.$this->saldoDolares.'<br>';
        echo '<b>'.'En numero de la chequera es: '.'</b>'.$this->numeroChequera.'<br>';
        echo '<b>'.'La fecha de la emision es: '.'</b>'.$this->fechaEmision.'<br>';
    
    }
}