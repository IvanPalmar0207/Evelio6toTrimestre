<?php

//Arreglo asociativo
$estudiantes = [
    [
        'nombre'=> 'Ivan David Palmar Martinez',
        'correo'=> 'palmar.ivan0205@gmail.com',
        'nivelAcademico'=> 'Tecnologo',
        'nombreEspecialidad'=> 'Analisis y Desarrollo de Software',
        'edad'=> 18
    ],
    [
        'nombre'=> 'Nathan Alexander Drake Rodriguez',
        'correo'=> 'nathanDrake@gmail.com',
        'nivelAcademico'=> 'Tecnico',
        'nombreEspecialidad'=> 'Desarrollo de software',
        'edad'=> 29
    ],
    [
        'nombre'=> 'Lionel Andres Messi Cuchitini',
        'correo'=> 'messi@outlook.com',
        'nivelAcademico'=> 'Tecnologo',
        'nombreEspecialidad'=> 'Animacion 3D',
        'edad'=> 23
    ],
    [
        'nombre'=> 'Goku Andrey Martinez Berney',
        'correo'=> 'goku@gmail.com',
        'nivelAcademico'=> 'Tecnologo',
        'nombreEspecialidad'=> 'Comercio Exterior',
        'edad'=> 35
    ],
    [
        'nombre'=> 'Naruto Agudelo Cepeda',
        'correo'=> 'naruto@gmail.com',
        'nivelAcademico'=> 'Tecnico',
        'nombreEspecialidad'=> 'Recreacion y deportes',
        'edad'=> 17
    ]
];

//Visulizacion de los componentes del arreglo

echo '<h2>'.'<b>'.'ESTUDIANTES EN EL SENA'.'</b>'.'</h2>';
echo 'Los estudiantes del SENA son:'.'<br>'.'<br>';

$contador = 0;
foreach($estudiantes as $estudiante){
    $contador+=1;
    echo '<h3>'.'<b>'.'Datos del estudiante numero '.$contador.'</b>'.'</h3>';
    echo 'El nombre del estudiante es: '.$estudiante['nombre'].'<br>';
    echo 'El correo del estudiante es: '.$estudiante['correo'].'<br>';
    echo 'El nivel academico del estudiante es: '.$estudiante['nivelAcademico'].'<br>';
    echo 'El nombre de la especialidad es: '.$estudiante['nombreEspecialidad'].'<br>';
    echo 'La edad del estudiante es: '.$estudiante['edad'].'<br>'.'<br>';
}

?>