<form action="#" method='post'>
    <label for="numero1">Ingresa un numero</label>
    <input type="text" name="numero1" id="numero1">
    <input type="submit" value="Enviar">
</form>

<?php

//Las funciones anonimas son funciones que no tienen un nombre

function tablaMultiplicar($numero1){
    echo '<h3>'.'<b>'.'TABLAS DE MULTIPLICAR'.'</b>'.'</h3>';
    echo 'La tabla de multiplicar del numero '. $numero1() .' es:'.'<br>'.'<br>';
    echo $numero1() .' x 1: '. $numero1() * 1 .'<br>';
    echo $numero1() .' x 2: '. $numero1() * 2 .'<br>';
    echo $numero1() .' x 3: '. $numero1() * 3 .'<br>';
    echo $numero1() .' x 4: '. $numero1() * 4 .'<br>';
    echo $numero1() .' x 5: '. $numero1() * 5 .'<br>';
    echo $numero1() .' x 6: '. $numero1() * 6 .'<br>';
    echo $numero1() .' x 7: '. $numero1() * 7 .'<br>';
    echo $numero1() .' x 8: '. $numero1() * 8 .'<br>';
    echo $numero1() .' x 9: '. $numero1() * 9 .'<br>';
    echo $numero1() .' x 10: '. $numero1() * 10 .'<br>';
}

tablaMultiplicar(function (){
    $numero1 = $_POST['numero1'];
    return $numero1; 
});

?>