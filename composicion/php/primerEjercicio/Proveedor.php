<?php

class Proveedor{
    private string $tipoProveedor;
    private string $nombreProveedor;
    private string $ciudadProveedor;
    private string $correoProveedor;
    private string $telefonoProveedor;
    private string $direccionProveedor;

    public function __construct(string $tipoProveedor, string $nombreProveedor, string $ciudadProveedor, string $correoProveedor, string $telefonoProveedor, string $direccionProveedor){

        $this->tipoProveedor = $tipoProveedor;
        $this->nombreProveedor = $nombreProveedor;
        $this->ciudadProveedor = $ciudadProveedor;
        $this->correoProveedor = $correoProveedor;
        $this->telefonoProveedor = $telefonoProveedor;
        $this->direccionProveedor = $direccionProveedor;

    }
    //Tipo de proveedor
    public function getTipoProveedor(){
        return $this->tipoProveedor;
    }
    public function setTipoProveedor($tipoProveedor){
        $this->tipoProveedor = $tipoProveedor;
    }
    //Nombre del proveedor
    public function getNombreProveedor(){
        return $this->nombreProveedor;
    }
    public function setNombreProveedor($nombreProveedor){
        $this->nombreProveedor = $nombreProveedor;
    }
    //Ciudad del proveedor
    public function getCiudadProveedor(){
        return $this->ciudadProveedor;
    }
    public function setCiudadProveedor($ciudadProveedor){
        $this->ciudadProveedor = $ciudadProveedor;
    }
    //Correo del proveedor
    public function getCorreoProveedor(){
        return $this->correoProveedor;
    }
    public function setCorreoProveedor($correoProveedor){
        $this->correoProveedor = $correoProveedor;
    }
    //Telefono del proveedor
    public function getTelefonoProveedor(){
        return $this->telefonoProveedor;
    }
    public function setTelefonoProveedor($telefonoProveedor){
        $this->telefonoProveedor = $telefonoProveedor;
    }
    //Direccion del proveedor
    public function getDireccionProveedor(){
        return $this->direccionProveedor;
    }
    public function setDireccionProveedor($direccionProveedor){
        $this->direccionProveedor = $direccionProveedor;
    }

}

?>