<?php
include("aula08.php");

class Triangulo extends Shape {

    public function __construct($a , $b) {
        $this->altura = $a;
        $this->base = $b; 
    }

    function getCalArea() {
        return ($this->base * $this->altura) /2;
    }
}

$obTri = new Triangulo(2,3);
echo $obTri->getCalArea();