<?php

declare(strict_types=1);

class Cliente{
    private string $numeroDocumentoCli;
    private string $tipoDocumentoCli;
    private string $emailCli;
    private string $nombreCli;
    private string $apellidoCli;
    private string $contrasenaCli;

    public function __construct(string $numeroDocumentoCli, string $tipoDocumentoCli, string $emailCli, string $nombreCli, string $apellidoCli, string $contrasenaCli){

        $this->numeroDocumentoCli = $numeroDocumentoCli;
        $this->tipoDocumentoCli = $tipoDocumentoCli;
        $this->emailCli = $emailCli;
        $this->nombreCli = $nombreCli;
        $this->apellidoCli = $apellidoCli;
        $this->contrasenaCli = $contrasenaCli;

    }

    //Numero de documento

    public function getNumeroDocumentoCli(){
        return $this->numeroDocumentoCli;
    }

    public function setNumeroDocumentoCli($numeroDocumentoCli){
        $this->numeroDocumentoCli = $numeroDocumentoCli;
    }

    //Tipo de documento
    public function getTipoDocumentoCli(){
        return $this->tipoDocumentoCli;
    }
    public function setTipoDocumentoCli($tipoDocumentoCli){
        $this->tipoDocumentoCli = $tipoDocumentoCli;
    }

    //Email
    public function getEmailCli(){
        return $this->emailCli;
    }
    public function setEmailCli($emailCli){
        $this->emailCli = $emailCli;
    }

    //Nombre
    public function getNombreCli(){
        return $this->nombreCli;
    }
    public function setNombreCli($nombreCli){
        $this->nombreCli = $nombreCli;
    }

    //Apellido
    public function getApellidoCli(){
        return $this->apellidoCli;
    }
    public function setApellidoCli($apellidoCli){
        $this->apellidoCli = $apellidoCli;
    }

    //Contraseña
    public function getContrasenaCli(){
        return $this->contrasenaCli;
    }   
    public function setContrasenaCli($contrasenaCli){
        $this->contrasenaCli = $contrasenaCli;
    }
}

?>