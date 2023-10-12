<?php

class Producto{

    private string $nombreProducto;
    private float $precio;
    private $proveedores = [];

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
    
    //Agregar proveedores
    public function agregarProveedores($proveedor){
        array_push($this->proveedores, $proveedor);
    }

    //Visualizacion de los proveedores
    public function verProveedores(){
        return $this->proveedores;
    }


}

?>