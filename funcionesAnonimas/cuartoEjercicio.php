<?php

$colorBandera = 'azul, amarilla y roja';

$bandera = function() use ($colorBandera){
    echo '<h2>'.'<b>'.'BANDERAS ALREDEDOR DEL MUNDO'.'</b>'.'</h2>';
    echo 'El color de la bandera de Colombia es: '. $colorBandera;
};

echo $bandera($colorBandera);

?>