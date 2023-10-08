<?php

declare(strict_types=1);

class Empleado{
    private string $numeroDocumentoEmp;
    private string $tipoDocumentoEmp;
    private string $emailEmp;
    private string $nombreEmp;
    private string $apellidoEmp;
    private string $cargoEmp;
    private float $salarioEmp;
    private string $contrasenaEmp;

    public function __construct(string $numeroDocumentoEmp, string $tipoDocumentoEmp, string $emailEmp, string $nombreEmp, string $apellidoEmp, string $cargoEmp, float $salarioEmp, string $contrasenaEmp){

        $this->numeroDocumentoEmp = $numeroDocumentoEmp;
        $this->tipoDocumentoEmp = $tipoDocumentoEmp;
        $this->emailEmp = $emailEmp;
        $this->nombreEmp= $nombreEmp;
        $this->apellidoEmp = $apellidoEmp;
        $this->cargoEmp = $cargoEmp;
        $this->salarioEmp = $salarioEmp;
        $this->contrasenaEmp = $contrasenaEmp;

    }

    //Numero de documento

    public function getNumeroDocumentoEmp(){
        return $this->numeroDocumentoEmp;
    }

    public function setNumeroDocumentoEmp($numeroDocumentoEmp){
        $this->numeroDocumentoEmp = $numeroDocumentoEmp;
    }

    //Tipo de documento
    public function getTipoDocumentoEmp(){
        return $this->tipoDocumentoEmp;
    }
    public function setTipoDocumentoEmp($tipoDocumentoEmp){
        $this->tipoDocumentoEmp = $tipoDocumentoEmp;
    }

    //Email
    public function getEmailEmp(){
        return $this->emailEmp;
    }
    public function setEmailEmp($emailEmp){
        $this->emailEmp = $emailEmp;
    }

    //Nombre
    public function getNombreEmp(){
        return $this->nombreEmp;
    }
    public function setNombreEmp($nombreEmp){
        $this->nombreEmp = $nombreEmp;
    }

    //Apellido
    public function getApellidoEmp(){
        return $this->apellidoEmp;
    }
    public function setApellidoEmp($apellidoEmp){
        $this->apellidoEmp = $apellidoEmp;
    }

    //Cargo
    public function getCargoEmp(){
        return $this->cargoEmp;
    }
    public function setCargoEmp($cargoEmp){
        $this->cargoEmp = $cargoEmp;
    }

    //Salario
    public function getSalarioEmp(){
        return $this->salarioEmp;
    }
    public function setSalarioEmp($salarioEmp){
        $this->salarioEmp = $salarioEmp;
    }

    //Contraseña
    public function getContrasenaEmp(){
        return $this->contrasenaEmp;
    }   
    public function setContrasenaEmp($contrasenaEmp){
        $this->contrasenaEmp = $contrasenaEmp;
    }
}

?>