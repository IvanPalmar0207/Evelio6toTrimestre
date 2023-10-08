<?php

//Importe de las clases aprendiz y computadora
require_once('Aprendiz.php');
require_once('Computadora.php');

//Instancias de la clase aprendiz
$aprendiz1 = new Aprendiz('Lionel Andres Messi Cuchitini');

//Instancias de la clase computadora
$computador1 = new Computador('Ryzen 7','AMD','Ram DIMM',5,'Solido',500);
$computador2 = new Computador('Ryzen 5','AMD','Ram DIMM',6,'Solido',1000);

//Agregar computadoras al Aprendiz
$aprendiz1->agregarComputadora($computador1);
$aprendiz1->agregarComputadora($computador2);

//Visualizacion de los comptuadores

echo '<h2>'.'<b>'.'Computadoras SENA'.'</b>'.'</h2>';
echo 'El nombre del aprendiz es: '.$aprendiz1->getNombreAprendiz().'<br>';
echo '<br>';

echo 'Los computadores asociados al aprediz son:'.'<br>'.'<br>';

foreach($aprendiz1->verComputadoras() as $computador){
    echo '<b>-</b> '.$computador->getTipoProcesador().' '.$computador->getMarcaProcesador().' '.$computador->getTipoMemoria().' '.$computador->getCapacidadMemoria().' '.$computador->getTipoAlmacenamiento().' '.$computador->getCapacidadAlmacenamiento().'<br>';
}

?>