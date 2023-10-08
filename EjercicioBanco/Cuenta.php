<?php

class Cuenta{

    private string $numeroCuenta;
    private float $saldoPesos;
    private float $saldoDolares;

    public function __construct(string $numeroCuenta, float $saldoPesos, float $saldoDolares){

        $this->numeroCuenta = $numeroCuenta;
        $this->saldoPesos = $saldoPesos;
        $this->saldoDolares = $saldoDolares;        

    }

    //Numero de cuenta
    public function getNumeroCuenta(){
        return $this->numeroCuenta;
    }
    public function setNumeroCuenta($numeroCuenta){
        $this->numeroCuenta = $numeroCuenta;
    }

    //Saldo en pesos
    public function getSaldoPesos(){
        return $this->saldoPesos;
    }
    public function setSaldoPesos($saldoPesos){
        $this->saldoPesos = $saldoPesos;
    }

    //Saldo en dolares
    public function getSaldoDolares(){
        return $this->saldoDolares;
    }
    public function setSaldoDolares($saldoDolares){
        $this->saldoDolares = $saldoDolares;
    }

    //Metodo para mostrar la informacion

    public function mostrarDatos(){
        echo '<h2>'.'<b>'.'Datos de la cuenta'.'</b>'.'</h2>';
        echo 'El numero de cuenta es: '.$this->numeroCuenta.'<br>';
        echo 'El saldo en pesos es: '.$this->saldoPesos.'<br>';
        echo 'El saldo en dolares es: '.$this->saldoDolares;
    }

}

?>