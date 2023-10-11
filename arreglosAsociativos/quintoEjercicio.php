<?php

//Arreglo asociativo
$computadores = [
    [
        'referencia'=> 'Apple Mac',
        'marca'=> 'Asus',
        'precio'=> 3100000
    ],
    [
        'referencia'=> 'MacBook',
        'marca'=> 'Apple',
        'precio'=> 6000000,
    ],
    [
        'referencia'=> 'IdeaPad',
        'marca'=> 'Lenovo',
        'precio'=> 2999999,
    ]
];

//Visulizacion de los componentes del arreglo

echo '<h2>'.'<b>'.'COMPUTADORES'.'</b>'.'</h2>';
echo 'Los computadores son:'.'<br>';

$contador = 0;
foreach($computadores as $computador){
    $contador+=1;
    echo '<h3>'.'<b>'.'Datos del computador numero '.$contador.'</b>'.'</h3>';
    echo 'El nombre del futbolista es: '.$computador['referencia'].'<br>';
    echo 'El equipo del futbolista es: '.$computador['marca'].'<br>';
    echo 'La edad del futbolista es: '.$computador['precio'].'<br>';
}

?>