<?php

//Importe de las clases
require_once('Aprendiz.php');
require_once('Ficha.php');
require_once('Programa.php');

//Instancias de la clase Aprendiz
$aprendiz1 = new Aprendiz('1030533045','Ivan David','Palmar Martinez','palmar.ivan0205@gmail.com');
$aprendiz2 = new Aprendiz('4342343244','Lionel Andres','Messi Cuchitini','messi@gmail.com');
$aprendiz3 = new Aprendiz('4324324324','Goku David','Rodriguez Martinez','goku@gmail.com');
$aprendiz4 = new Aprendiz('4324234323','David Antonio','Zamora Pulid','david@gmail.com');
$aprendiz5 = new Aprendiz('3424324333','Benito','Martinez Ocasio','benito@gmail.com');
$aprendiz6 = new Aprendiz('6456545465','Andrew','Garfield Suarez','andrew@hotmail.com');
$aprendiz7 = new Aprendiz('1231243244','Elena','Facer Martinez','elena@gmail.com');
$aprendiz8 = new Aprendiz('654564565','Samuel','De Luque Palmar','samuel@gmail.com');
$aprendiz9 = new Aprendiz('543534545','Teresa','Rodriguez Martinez','teresa@gmail.com');
$aprendiz10 = new Aprendiz('5325564565','Adriana Marcela','Palmar Martinez','adri_2407@outlook.com');
$aprendiz11 = new Aprendiz('5465645645','Flavio','Palmar Luque','flavio@gmail.com');
$aprendiz12 = new Aprendiz('8678768678','Romariño','Douglas Costa','goku@gmail.com');
$aprendiz13 = new Aprendiz('1312312443','Jean','Berney Rodriguez','jean@gmail.com');
$aprendiz14 = new Aprendiz('9657655322','Luz','Marina Estupiñnan','estul_@gmail.com');
$aprendiz15 = new Aprendiz('4356652110','Francis','Marina Estupiñan','francis@gmail.com');

//Instancias de Ficha
$ficha1 = new Ficha('2560664-B');
$ficha2 = new Ficha('2560664-A');
$ficha3 = new Ficha('3124324');
$ficha4 = new Ficha('3424343');
$ficha5 = new Ficha('4323234');

$ficha1->agregarAprendices($aprendiz1);
$ficha1->agregarAprendices($aprendiz2);
$ficha1->agregarAprendices($aprendiz3);

$ficha2->agregarAprendices($aprendiz4);
$ficha2->agregarAprendices($aprendiz5);
$ficha2->agregarAprendices($aprendiz6);

$ficha3->agregarAprendices($aprendiz7);
$ficha3->agregarAprendices($aprendiz8);
$ficha3->agregarAprendices($aprendiz9);

$ficha4->agregarAprendices($aprendiz10);
$ficha4->agregarAprendices($aprendiz11);
$ficha4->agregarAprendices($aprendiz12);

$ficha5->agregarAprendices($aprendiz13);
$ficha5->agregarAprendices($aprendiz14);
$ficha5->agregarAprendices($aprendiz15);


//Visualizacion de los datos de la ficha
echo '<h2>'.'<b>'.'APRENDICES Y SU FICHA DENTRO DEL SENA'.'</b>'.'</h2>';
$ficha1->verAprendicesFicha();
$ficha2->verAprendicesFicha();
$ficha3->verAprendicesFicha();
$ficha4->verAprendicesFicha();
$ficha5->verAprendicesFicha();


//Instancias de Programa
$programa1 = new Programa('4324324','Analisis y Desarrollo de Software');
echo '<h2>'.'<b>'.'PROGRAMAS EN EL SENA'.'</b>'.'</h2>';
echo 'El codigo del programa es: ' .$programa1->getCodigoPrograma(). '<br>';
echo 'El nombre del programa es: ' .$programa1->getNombrePrograma();

?>