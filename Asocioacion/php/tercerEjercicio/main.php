<?php

//Importe de las clases Piloto, Aeronave y Vuelo
require_once('Piloto.php');
require_once('Aeronave.php');
require_once('Vuelo.php');

//Instancias de Piloto
$piloto1 = new Piloto('Ivan David Palmar Martinez');

//Instancias de Aeronave
$aeronave1 = new Aeronave('SOS097','Avianca','Airbus',2005);

//Instancias de Vuelo
$vuelo1 = new Vuelo('Puerto 1','Puerto 500','25/09/2023','10am');
$vuelo2 = new Vuelo('Puerto 20','Puerto 2','29/09/2023','9:15am');

//Agregar Aeronave
$piloto1->agregarAeronaves($aeronave1);

//Agregar Vuelo
$piloto1->agregarVuelos($vuelo1);
$piloto1->agregarVuelos($vuelo2);

//Visualizacion de Aeronaves y Vuelos
echo '<h2>'.'<b>'.'AEROPUETO EL DORADO'.'</b>'.'</h2>';
echo 'El nombre el piloto es: '.$piloto1->getNombrePiloto().'<br>'.'<br>';

echo 'Las aeronave/s del piloto son:'.'<br>';
foreach($piloto1->verAeronaves() as $aeronaves){
    echo '-'.$aeronaves->getNumeroMatricula().' '.$aeronaves->getNombreOperador().' '.$aeronaves->getFabricanteNave().' '.$aeronaves->getModeloNave().'<br>';
}

echo '<br>';

echo 'Los vuelo/s del piloto son:'.'<br>';
foreach($piloto1->verVuelos() as $vuelos){
    echo '-'.$vuelos->getPuertoOrigen().' '.$vuelos->getPuertoDestino().' '.$vuelos->getFechaVuelo().' '.$vuelos->getHoraVuelo().'<br>';
}

?>