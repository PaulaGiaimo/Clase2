<?php


echo "hola";
class FigurasGeometricas
{
protected $_superficie;
protected $_color;
protected $_perimetro;


//public FigurasGeometricas(){}

public function setColor($color)
{
    $this->_color= $color;
}

public function getColor()
{
    return $this->_color;
}
 abstract public function Dibujar();
//abstract protected function CalcularDatos();
 

}
?>