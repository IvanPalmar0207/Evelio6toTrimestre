<?php

//Importe de las clases camion y automovil
require_once('Camion.php');
require_once('Automovil.php');

//Instancias de Camion y su visualizacion
$camion1 = new Camion('Caterpillar',2005,500000000.0,10,10);
$camion1->mostrarDatos();

//Instancias de automovil y su visualizacion
$automovil1 = new Automovil('Mazda',1997,150000000.0,'Convertible','Naranja y verde');
$automovil1->mostrarDatos();

?>