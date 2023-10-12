<?php

require_once('CarroCompra.php');
require_once('Clientee.php');

class Pedido{
    private CarroCompra $carro;
    private Clientee $cliente;
    private static $contador = 0;
    public function __construct(Clientee $cliente, CarroCompra $carro){

        $this->cliente = $cliente;
        $this->carro = $carro;
        Pedido::$contador+=1;

    }

    //Visualizacion de cliente
    public function mostrarDatosCliente(){
        echo 'Los datos del cliente '. $this->cliente->getNombreCliente(). ' son:' ;
        echo 'El nombre del cliente es: '. $this->cliente->getNombreCliente().'<br>';
        echo 'El correo del cliente es: '. $this->cliente->getCorreoCliente().'<br>';
        echo 'La direccion del cliente es: '. $this->cliente->getDireccionCliente().'<br>';
        echo 'El telefono del cliente es: '. $this->cliente->getTelefonoCliente().'<br>';
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

    //Numero de instancias
    public static function verInstancias(){
        return Pedido::$contador;
    }

}

?>