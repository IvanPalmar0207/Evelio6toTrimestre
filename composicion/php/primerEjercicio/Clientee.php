<?php

class Clientee{
    private string $nombreCliente;
    private string $correoCliente;
    private string $direccionCliente;
    private string $telefonoCliente;

    public function __construct(string $nombreCliente, string $correoCliente, string $direccionCliente, string $telefonoCliente){

        $this->nombreCliente = $nombreCliente;
        $this->correoCliente = $correoCliente;
        $this->direccionCliente = $direccionCliente;
        $this->telefonoCliente = $telefonoCliente;

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
    public function setCorreoCliente($correoCliente){
        $this->correoCliente = $correoCliente;
    }
    //Direccion del cliente
    public function getDireccionCliente(){
        return $this->direccionCliente;
    }
    public function setDireccionCliente($direccionCliente){
        $this->direccionCliente = $direccionCliente;
    }
    //Telefono del cliente
    public function getTelefonoCliente(){
        return $this->telefonoCliente;
    }
    public function setTelefonoCliente($telefonoCliente){
        $this->telefonoCliente = $telefonoCliente;
    }

}

?>