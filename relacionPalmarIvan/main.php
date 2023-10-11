<?php

//Importe de las clases
require_once('Aprendiz.php');
require_once('Ficha.php');
require_once('Programa.php');

//Instancias de la clase Aprendiz
$aprendiz1 = new Aprendiz('1030533045','Ivan David','Palmar Martinez','palmar.ivan0205@gmail.com');
$aprendiz2 = new Aprendiz('4342343244','Lionel Andres','Messi Cuchitini','messi@gmail.com');
$aprendiz3 = new Aprendiz('4324324324','Goku David','Rodriguez Martinez','goku@gmail.com');

//Instancias de Ficha
$ficha1 = new Ficha('2560664-B');
$ficha1->agregarAprendices($aprendiz1);
$ficha1->agregarAprendices($aprendiz2);
$ficha1->agregarAprendices($aprendiz3);

//Visualizacion de los datos de la ficha
$ficha1->verAprendicesFicha();

//Instancias de Programa
$programa1 = new Programa('4324324','Analisis y Desarrollo de Software');
echo '<h2>'.'<b>'.'PROGRAMAS EN EL SENA'.'</b>'.'</h2>';
echo 'El codigo del programa es: ' .$programa1->getCodigoPrograma(). '<br>';
echo 'El nombre del programa es: ' .$programa1->getNombrePrograma();

?>