<?php

require_once('Producto.php');
class CarroCompra{

    private $productos = [];

    public function agregarProducto(Producto $producto){
        $this->productos [] = $producto;
    }

    public function getSubTotal(){
        $subTotal = 0;
        foreach($this->productos as $producto){
            $subTotal += $producto->getPrecio();
        }

        return $subTotal;
    }

    public function vaciarCarro(){
        $this->productos = [];
    }

}

?>