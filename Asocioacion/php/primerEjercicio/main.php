<?php

//Importe de las clases Cliente y MediosPagos
require_once('Cliente.php');
require_once('MediosPago.php');

//Instancia de los metodos de pago
$medioPago1 = new MediosPago('Efectivo');
$medioPago2 = new MediosPago('Tarjeta debito');

//Instancia de los clientes
$cliente1 = new Cliente('Ivan David Palmar Martinez');

//Visualizacion de los metodos de pago
$cliente1->agregarMedioPago($medioPago1);
$cliente1->agregarMedioPago($medioPago2);

echo '<h2>'.'<b>'.'Banco de Bogota'.'</b>'.'</h2>';
echo 'El nombre del cliente es: <br>'. $cliente1->getNombreCliente().'<br>'.'<br>';
echo 'Sus metodos de pago son: <br>';
foreach ($cliente1->verMediosPago() as $medios){    
    echo '-'.$medios->getNombreMedio().'<br>';
}

?>