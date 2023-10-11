<form action="#" method="post">
    <h2>SUMA DE DOS NUMEROS</h2>
    <label for="numero1">Ingresa el primer numero:</label>
    <input type="text" name="numero1" id="numero1">
    <br>
    <br>
    <label for="numero2">Ingresa el segundo numero:</label>
    <input type="text" name="numero2" id="numero2">
    <br>
    <br>
    <input type="submit" value="Sumar">
</form>

<?php

$suma = function ($numero1, $numero2){
    echo "La suma de los dos numeros es igual a: ". $numero1 + $numero2;
};

$numeroUno = $_POST['numero1'];
$numeroDos = $_POST['numero2'];

echo $suma($numeroUno,$numeroDos);

?>