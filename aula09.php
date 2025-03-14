<?php
include("aula08.php");

class Retangulo extends Shape
{


    //metodo
    function getCalArea()
    {
        return $this->base * $this->altura;
    }



}

$obRect = new Retangulo();
$obRect->base = 2;
$obRect->altura = 10;

echo $obRect->getCalArea();


?>