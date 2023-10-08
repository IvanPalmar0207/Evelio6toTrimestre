<?php

class Automotor{
    
    private string $marca;
    private int $modelo;
    private float $precio;
    
    public function __construct(string $marca, int $modelo, float $precio){

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;

    }

    //Marca del automotor
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }

    //Modelo del automotor
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    //Precio del automotor
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }

    //Metodo de mostrar datos

    public function mostrarDatos(){
        echo '<h2>'.'<b>'.'AUTOMOTORES'.'</b>'.'</h2>';        
        echo 'La marca del automotor es: '.$this->marca.'<br>';
        echo 'El modelo del automotor es: '.$this->modelo.'<br>';
        echo 'El precio del automotor es: '.$this->precio.'<br>';
    }    

}

?>