<?php

require_once('Aprendiz.php');

class Ficha{

    private string $codigoFicha;
    private $aprendices = [];

    public function __construct(string $codigoFicha){

        $this->codigoFicha = $codigoFicha;

    }

    //Codigo de la ficha 
    public function getCodigoFicha(){
        return $this->codigoFicha;
    }
    public function setCodigoFicha($codigoFicha){
        $this->codigoFicha = $codigoFicha;
    }

    //Agregar aprendices

    public function agregarAprendices(Aprendiz $aprendiz){
        array_push($this->aprendices,$aprendiz);
    }
    
    //Ver aprendices
    public function verAprendicesFicha(){
        echo '<br>'.'Los aprendices asociados a la ficha '. $this->codigoFicha . ' son: '. '<br>'.'<br>';
        foreach($this->aprendices as $aprendiz){
            echo '<b>'.'- '.'</b>'.$aprendiz->getIdAprendiz() .', '. $aprendiz->getNombres() .', '. $aprendiz->getApellidos() .', '. $aprendiz->getCorreo(). '<br>';
        }
    }
}

?>