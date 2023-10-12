<?php

//Importe de clases
require_once('Producto.php');
require_once('Pedido.php');
require_once('CarroCompra.php');
require_once('Clientee.php');
require_once('Proveedor.php');

//Instancias de proveedor
$proveedor1 = new Proveedor('Persona Natural','Lionel Messi Cuchitini','Bogota D.C','lionel@gmail.com','3214344449','Calle 12ava 21');
$proveedor2 = new Proveedor('Persona Juridica','Goku Alejandro Fernandez Martinez','Medellin','goku@gmail.com','3213648844','Avenida 21');

//Instancias de Producto
$producto1 = new Producto('Camiseta de argentina',60000);
$producto2 = new Producto('Licuadora',250000);
$producto3 = new Producto('Escritorio',500000);
$producto4 = new Producto('Chaqueta H&M',560000);
$producto5 = new Producto('Aspiradora',800000);
//Asignacion de proveedores
$producto1->agregarProveedores($proveedor1);
$producto2->agregarProveedores($proveedor1);
$producto3->agregarProveedores($proveedor1);
$producto4->agregarProveedores($proveedor2);
$producto5->agregarProveedores($proveedor2);

//Instancias de Carro de compra
$carro1 = new CarroCompra();
$carro1->agregarProducto($producto1);
$carro1->agregarProducto($producto2);
$carro1->agregarProducto($producto3);
$carro1->agregarProducto($producto4);
$carro1->agregarProducto($producto5);

//Instancias de cliente
$cliente1 = new Clientee('Ivan David Palmar Martinez','palmar.ivan0205@gmail.com','Calle 34# 14 - 00','3214344449');

//Instancias de Pedido
$pedido1 = new Pedido($cliente1,$carro1);

//Visualizacion de la data
echo '<h2>'.'<b>'.'AMAZON - PEDIDOS'.'</b>'.'</h2>';
echo 'El cliente es: '. $cliente1->getNombreCliente().'<br>';
echo 'El total de la compra es: $ '. $pedido1->getTotal() . '<br>';
echo 'El estado del pedido es: '. $pedido1->procesarPedido().'<br>';
echo 'El numero de pedidos hasta el momento es de: '. Pedido::verInstancias().'<br>';

//Visualizacion de los productos y sus proveedores
echo '<h2>'.'<b>'.'PROVEEDORES Y SUS PRODUCTOS'.'</b>'.'</h2>';

echo 'Los provedores del producto '. $producto1->getNombreProducto(). ' son: '.'<br>';
foreach ($producto1->verProveedores() as $proveedores){
    echo  '-'. $proveedores->getTipoProveedor() .' '. $proveedores->getNombreProveedor() .' '. $proveedores->getCiudadProveedor() .' '. $proveedores->getCorreoProveedor() .' '. $proveedores->getTelefonoProveedor() .' '. $proveedores->getDireccionProveedor() .'<br>'.'<br>';
}

echo 'Los provedores del producto '. $producto2->getNombreProducto(). ' son: '.'<br>';
foreach ($producto2->verProveedores() as $proveedores){
    echo  '-'. $proveedores->getTipoProveedor() .' '. $proveedores->getNombreProveedor() .' '. $proveedores->getCiudadProveedor() .' '. $proveedores->getCorreoProveedor() .' '. $proveedores->getTelefonoProveedor() .' '. $proveedores->getDireccionProveedor() .'<br>'.'<br>';
}

echo 'Los provedores del producto '. $producto3->getNombreProducto(). ' son: '.'<br>';
foreach ($producto3->verProveedores() as $proveedores){
    echo  '-'. $proveedores->getTipoProveedor() .' '. $proveedores->getNombreProveedor() .' '. $proveedores->getCiudadProveedor() .' '. $proveedores->getCorreoProveedor() .' '. $proveedores->getTelefonoProveedor() .' '. $proveedores->getDireccionProveedor() .'<br>'.'<br>';
}

echo 'Los provedores del producto '. $producto4->getNombreProducto(). ' son: '.'<br>';
foreach ($producto4->verProveedores() as $proveedores){
    echo  '-'.$proveedores->getTipoProveedor() .' '. $proveedores->getNombreProveedor() .' '. $proveedores->getCiudadProveedor() .' '. $proveedores->getCorreoProveedor() .' '. $proveedores->getTelefonoProveedor() .' '. $proveedores->getDireccionProveedor() .'<br>'.'<br>';
}

echo 'Los provedores del producto '. $producto5->getNombreProducto(). ' son: '.'<br>';
foreach ($producto5->verProveedores() as $proveedores){
    echo  '-'.$proveedores->getTipoProveedor() .' '. $proveedores->getNombreProveedor() .' '. $proveedores->getCiudadProveedor() .' '. $proveedores->getCorreoProveedor() .' '. $proveedores->getTelefonoProveedor() .' '. $proveedores->getDireccionProveedor() .'<br>'.'<br>';
}

?>