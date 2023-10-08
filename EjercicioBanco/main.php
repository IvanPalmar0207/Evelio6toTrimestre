<?php
require_once('Corriente.php');
require_once('Ahorros.php');

$corriente = new Corriente('423432432',5000000,1250,'4324234324','4/10/2023');

$corriente->mostrarDatos();

echo '<br>';

$ahorros = new Ahorros('13423423',1000000,300,'Banco de Bogota','4/10/2023',0.5);

$ahorros->mostrarDatos();
?>