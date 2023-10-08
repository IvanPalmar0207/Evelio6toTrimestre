<?php

require_once('Cuenta.php');
class Ahorros extends Cuenta{

private string $sucursalApertura;
private string $fechaApertura;
private float $tasaInteres;

public function __construct($numeroCuenta, $saldoPesos, $saldoDolares, string $sucursalApertura, string $fechaApertura, float $tasaInteres){

    parent::__construct($numeroCuenta,$saldoPesos,$saldoDolares);

    $this->numeroCuenta = $numeroCuenta;
    $this->saldoPesos = $saldoPesos;
    $this->saldoDolares = $saldoDolares;
    $this->sucursalApertura = $sucursalApertura;
    $this->fechaApertura = $fechaApertura;
    $this->tasaInteres = $tasaInteres;

}

//Sucursal de apertura
public function getSucursalApertura(){
    return $this->sucursalApertura;
}
public function setSucursalApertura($sucursalApertura){
    $this->sucursalApertura = $sucursalApertura;
}

//Fecha de apertura
public function getFechaApertura(){
    return $this->fechaApertura;
}
public function setFechaApertura($fechaApertura){
    $this->fechaApertura = $fechaApertura;
}

//Tasa de interes
public function getTasaInteres(){
    return $this->tasaInteres;
}
public function setTasaInteres($tasaInteres){
    $this->tasaInteres = $tasaInteres;
}

//Metodo para mostrar la informacion

public function mostrarDatos(){
    echo '<h2>'.'<b>'.'Datos de la cuenta de ahorros'.'</b>'.'</h2>';
    echo '<b>'.'El numero de cuenta es: '.'</b>'.$this->numeroCuenta.'<br>';
    echo '<b>'.'El saldo en pesos es: '.'</b>'.$this->saldoPesos.'<br>';
    echo '<b>'.'El saldo en dolares es: '.'</b>'.$this->saldoDolares.'<br>';
    echo '<b>'.'En que sucursal fue la apertura: '.'</b>'.$this->sucursalApertura.'<br>';
    echo '<b>'.'La fecha de apertura es: '.'</b>'.$this->fechaApertura.'<br>';
    echo '<b>'.'La tasa de interes: '.'</b>'.$this->tasaInteres.'<br>';        
}
}

?>