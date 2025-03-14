<?php
include("aula08.php");

class Triangulo extends Shape {

    function getCalArea() {
        return ($this->base * $this->altura) /2;
    }
}

$obTri = new Triangulo();
$obTri->base = 2;
$obTri->altura = 10;

echo $obTri->getCalArea();