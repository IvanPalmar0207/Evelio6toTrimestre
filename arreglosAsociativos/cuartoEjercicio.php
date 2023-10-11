<?php

//Arreglo asociativo
$fubtolistas = [
    [
        'nombre'=> 'Lionel Andres Messi Cuchitini',
        'equipo'=> 'Inter de Miami',
        'edad'=> 34,
        'precioMercado'=> 40000000
    ],
    [
        'nombre'=> 'Jude Bellingam',
        'equipo'=> 'Real Madrid',
        'edad'=> 24,
        'precioMercado'=> 120000000
    ],
    [
        'nombre'=> 'Cristiano Ronaldo Dos Santos Sabeiro',
        'equipo'=> 'Al NNassr',
        'edad'=> 38,
        'precioMercado'=> 20000000
    ],
    [
        'nombre'=> 'Neymar da Silva Santos Júnior',
        'equipo'=> 'Al hilad',
        'edad'=> 32,
        'precioMercado'=> 70000000
    ]
];

//Visulizacion de los componentes del arreglo

echo '<h2>'.'<b>'.'FUTBOLSITAS '.'</b>'.'</h2>';
echo 'Los futbolista elegidos son:'.'<br>';

$contador = 0;
foreach($fubtolistas as $futbolista){
    $contador+=1;
    echo '<h3>'.'<b>'.'Datos de los futbolistas numero '.$contador.'</b>'.'</h3>';
    echo 'El nombre del futbolista es: '.$futbolista['nombre'].'<br>';
    echo 'El equipo del futbolista es: '.$futbolista['equipo'].'<br>';
    echo 'La edad del futbolista es: '.$futbolista['edad'].'<br>';
    echo 'El precio del mercado del futbolista es: '.$futbolista['precioMercado'].'<br>';
}

?>