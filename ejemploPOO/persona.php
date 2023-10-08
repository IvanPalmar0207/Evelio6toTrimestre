<?php

class Persona{
    private string $numeroDocumentoPer;
    private string $tipoDocumentoPer;
    private string $nombrePer;
    private string $apellidoPer;
    private string $generoPer;
    private string $fechaNacimientoPer;

    public function __construct(string $numeroDocumentoPer, string $tipoDocumentoPer, string $nombrePer, string $apellidoPer, string $generoPer, string $fechaNacimientoPer){

        $this->numeroDocumentoPer = $numeroDocumentoPer;
        $this->tipoDocumentoPer = $tipoDocumentoPer;
        $this->nombrePer = $nombrePer;
        $this->apellidoPer = $apellidoPer;
        $this->generoPer = $generoPer;
        $this->fechaNacimientoPer = $fechaNacimientoPer;

    }

    //Numero de documento

    public function getNumeroDocumentoPer(){
        return $this->numeroDocumentoPer;
    }

    public function setNumeroDocumentoPer($numeroDocumentoPer){
        $this->numeroDocumentoPer = $numeroDocumentoPer;
    }

    //Tipo de documento
    public function getTipoDocumentoPer(){
        return $this->tipoDocumentoPer;
    }
    public function setTipoDocumentoPer($tipoDocumentoPer){
        $this->tipoDocumentoPer = $tipoDocumentoPer;
    }

    //Nombre 
    
    public function getNombrePer(){
        return $this->nombrePer;
    }
    public function setNombrePer($nombrePer){
        $this->nombrePer = $nombrePer;
    }

    //Apellido
    public function getApellidoPer(){
        return $this->apellidoPer;
    }
    public function setApellidoPer($apellidoPer){
        $this->apellidoPer = $apellidoPer;
    }
    
    //Genero
    public function getGeneroPer(){
        return $this->generoPer;
    }
    public function setGeneroPer($generoPer){
        $this->generoPer = $generoPer;
    }
    
    //Genero
    public function getfechaNacimientoPer(){
        return $this->fechaNacimientoPer;
    }
    public function setfechaNacimientoPer($fechaNacimientoPer){
        $this->fechaNacimientoPer = $fechaNacimientoPer;
    }

    //Metodo de saludo
    public function saludo(){
        echo 'Bienvenido a la clase Persona: '.$this->nombrePer;
    }

}
$persona1 = new Persona('1030533045','CC','Ivan David','Palmar Martinez','Masculino','02/01/2005');

//$persona1->saludo();

?>