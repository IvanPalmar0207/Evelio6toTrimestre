<form action="#" method="post">
    <label for="nombre1">Ingresa un nombre: </label>
    <input type="text" name="nombre1" id="nombre1">
    <br>
    <br>
    <input type="submit" value="Enviar">
</form>
<?php

//Las funciones anonimas son funciones que no tienen un nombre
function saludar($nombre){
    echo '<h2>'.'<b>'.'SALUDO A PERSONAS'.'</b>'.'</h2>';
    echo 'Bienvenido al sistema '. $nombre();
}

saludar(function(){
    $nombre1 = $_POST['nombre1'];
    return $nombre1;
})

?>