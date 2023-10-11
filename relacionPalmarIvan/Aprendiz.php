<?php

class Aprendiz{
    private string $idAprendiz;
    private string $nombres;
    private string $apellidos;
    private string $correo;

    public function __construct(string $idAprendiz, string $nombres, string $apellidos, string $correo){

        $this->idAprendiz = $idAprendiz;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->correo = $correo;

    }

    //Id del aprendiz
    public function getIdAprendiz(){
        return $this->idAprendiz;
    }  
    public function setIdAprendiz($idAprendiz){
        $this->idAprendiz = $idAprendiz;
    }

    //Nombre del aprendiz
    public function getNombres(){
        return $this->nombres;
    }
    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    //Apellidos del aprendiz
    public function getApellidos(){
        return $this->apellidos;
    }
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;    
    }  

    //Correo del aprendiz  
    public function getCorreo(){
        return $this->correo;
    }
    public function setCorreo($correo){
        $this->correo = $correo;
    }

}

?>