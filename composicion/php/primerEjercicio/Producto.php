<?php

class Producto{

    private string $nombreProducto;
    private float $precio;

    public function __construct(string $nombreProducto, float $precio){

        $this->nombreProducto = $nombreProducto;
        $this->precio = $precio;

    }

    //Nombre del producto
    public function getNombreProducto(){
        return $this->nombreProducto;        
    }
    public function setNombrePorducto($nombreProducto){
        $this->nombreProducto = $nombreProducto;
    }

    //Precio del producto
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }


}

?>