<?php

//Arreglo asociativo
$carros = [
    [
        'referencia'=> 'Ferrar Spyder',
        'marca'=> 'Ferrari',
        'modelo'=> 2007,
        'precio'=> 1700000000
    ],
    [
        'referencia'=> 'i25',
        'marca'=> 'Hyundai',
        'modelo'=> 2013,
        'precio'=> 40000000
    ],
    [
        'referencia'=> 'Chevrolet Spark',
        'marca'=> 'Chevrolet',
        'modelo'=> 2005,
        'precio'=> 38000000
    ]
];

//Visulizacion de los componentes del arreglo

echo '<h2>'.'<b>'.'AUTOMOVILES EN COLOMBIA'.'</b>'.'</h2>';
echo 'Los automoviles en Colombia son:'.'<br>';

$contador = 0;
foreach($carros as $carro){
    $contador+=1;
    echo '<h3>'.'<b>'.'Datos de la motocicleta numero '.$contador.'</b>'.'</h3>';
    echo 'La referencia de la motocicleta es: '.$carro['referencia'].'<br>';
    echo 'La marca de la motocicleta es: '.$carro['marca'].'<br>';
    echo 'El modelo de la motocicleta es: '.$carro['modelo'].'<br>';
    echo 'El precio de la motocicleta es: '.$carro['precio'].'<br>';
}

?>