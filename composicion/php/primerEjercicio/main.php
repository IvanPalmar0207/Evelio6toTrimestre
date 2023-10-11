<?php

//Importe de clases
require_once('Producto.php');
require_once('Pedido.php');
require_once('CarroCompra.php');

//Instancias de Producto
$producto1 = new Producto('Camiseta de argentina',60000);
$producto2 = new Producto('Licuadora',250000);
$producto3 = new Producto('Escritorio',500000);
$producto4 = new Producto('Chaqueta H&M',560000);
$producto5 = new Producto('Aspiradora',800000);

//Instancias de Carro de compra
$carro1 = new CarroCompra();
$carro1->agregarProducto($producto1);
$carro1->agregarProducto($producto2);
$carro1->agregarProducto($producto3);
$carro1->agregarProducto($producto4);
$carro1->agregarProducto($producto5);

//Instancias de Pedido
$pedido1 = new Pedido('Ivan David Palmar Martinez','palmar.ivan0205@gmail.com','Calle 34 # 14 - 00',$carro1);

//Visualizacion de la data
echo '<h2>'.'<b>'.'AMAZON - PEDIDOS'.'</b>'.'</h2>';
echo 'El cliente es: '. $pedido1->getNombreCliente().'<br>';
echo 'El total de la compra es: $ '. $pedido1->getTotal() . '<br>';
echo 'El estado del pedido es: '. $pedido1->procesarPedido()

?>