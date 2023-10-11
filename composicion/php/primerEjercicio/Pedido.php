<?php

require_once('CarroCompra.php');

class Pedido{

    private string $nombreCliente;
    private string $correoCliente;
    private string $direccionCliente;
    private CarroCompra $carro;

    public function __construct(string $nombreCliente, string $correoCliente, string $direccionCliente, CarroCompra $carro){

        $this->nombreCliente = $nombreCliente;
        $this->correoCliente = $correoCliente;
        $this->direccionCliente = $direccionCliente;
        $this->carro = $carro;

    }

    //Nombre del cliente
    public function getNombreCliente(){
        return $this->nombreCliente;
    }
    public function setNombreCliente($nombreCliente){
        $this->nombreCliente = $nombreCliente;
    }

    //Correo del cliente
    public function getCorreoCliente(){
        return $this->correoCliente;
    }    
    public function setCorroeCliente($correoCliente){
        $this->correoCliente = $correoCliente;
    }

    //Direccion del cliente
    public function getDireccionCliente(){
        return $this->direccionCliente;
    }

    public function setDireccionCliente($direccionCliente){
        $this->direccionCliente = $direccionCliente;
    }

    //Metodo de totales
    public function getTotal(){
        return $this->carro->getSubTotal();
    }

    //Metodo para procesar pedidos
    public function procesarPedido(){
        if($this->carro->vaciarCarro()){
            return 'Pedido procesado incorrectamente';
        }else{
            return 'Procesado correctamente';
        }
    }

}

?>