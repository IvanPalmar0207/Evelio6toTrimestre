<?php

require('empleado.php');

$empleado1 = new Empleado('1030533045','CC','Ivan David','Palmar Martinez','Masculino','02/01/2005','Cientifico de Datos',5000000.0);

echo '<h2>'.'<b>'.'Empleado Numero Uno'.'</b>'.'</h2>';
echo '<b>'.'Numero de documento: '.'</b>'. $empleado1->getNumeroDocumentoPer().'<br>';
echo '<b>'.'Tipo de documento: '.'</b>'.$empleado1->getTipoDocumentoPer().'<br>';
echo '<b>'.'Nombre Completo: '.'</b>'.$empleado1->getNombrePer().' '.$empleado1->getApellidoPer().'<br>';
echo '<b>'.'Genero: '.'</b>'.$empleado1->getGeneroPer().'<br>';
echo '<b>'.'Fecha de nacimiento: '.'</b>'.$empleado1->getfechaNacimientoPer().'<br>';
echo '<b>'.'Cargo: '.'</b>'.$empleado1->getCargpEmp().'<br>';
echo '<b>'.'Salario: '.'</b>'.$empleado1->getSalarioEmp();

?>