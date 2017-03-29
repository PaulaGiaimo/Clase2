<?php
require "Ap15p4.php";
class Triangulo extends FigurasGeometricas
{
    protected $_altura;
    protected $_base;
    
    function __construct ($_altura, $_base){
        $this->_altura = $_altura;
        $this->_base = $_base;   
    }
    

    public function Dibujar()
    {
       //FigurasGeometricas::Dibujar()
        return "dibuja";
    }
    public function CalcularDatos()
    {
        echo "calcula datos";
    }
}

?>