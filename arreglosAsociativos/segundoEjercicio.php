<?php

//Arreglo asociativo
$motos = [
    [
        'referencia'=> 'Gixxer 250cc',
        'marca'=> 'Susuki',
        'modelo'=> 2024,
        'precio'=> 17500000
    ],
    [
        'referencia'=> 'Yamaha R600cc',
        'marca'=> 'Yamaha',
        'modelo'=> 2010,
        'precio'=> 57000000
    ],
    [
        'referencia'=> 'DR 650cc',
        'marca'=> 'Susuki',
        'modelo'=> 2005,
        'precio'=> 24000000
    ],
    [
        'referencia'=> 'Kawasaki Z1000 H2',
        'marca'=> 'Kawasaki',
        'modelo'=> 2018,
        'precio'=> 62000000
    ]
];

//Visulizacion de los componentes del arreglo

echo '<h2>'.'<b>'.'MOTOS EN COLOMBIA'.'</b>'.'</h2>';
echo 'Las motos en Colombia son:'.'<br>'.'<br>';

$contador = 0;
foreach($motos as $moto){
    $contador+=1;
    echo '<h3>'.'<b>'.'Datos de la motocicleta numero '.$contador.'</b>'.'</h3>';
    echo 'La referencia de la motocicleta es: '.$moto['referencia'].'<br>';
    echo 'La marca de la motocicleta es: '.$moto['marca'].'<br>';
    echo 'El modelo de la motocicleta es: '.$moto['modelo'].'<br>';
    echo 'El precio de la motocicleta es: '.$moto['precio'].'<br>';
}

?>