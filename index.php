<?php
/*require "funciones.php";
//require ("NoExiste.php");
include "calculadora.php";
require "funciones.php";
$resultado= sumar(4,6);
echo $resultado;
function sumar($numero1,$numero2){
   // echo $numero1+$numero2;
   return $numero1+$numero2;
}
echo "<br>";
sumar(10,5);

$resultado=calculadora::sumar(3,3);
echo $resultado;
*/
//require "Ap15p4.php";
require "Triangulo.php";
echo "index";
$miTriangulo =  new Triangulo(10,5);
$miTriangulo->Dibujar();

?>