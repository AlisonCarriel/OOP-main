<?php

class Eletronico
{
    function __construct($arg01, $arg02){
        $this->categoria = $arg01;
        $this->voltagem = $arg02;
    }
    //propriedade
    private $categoria;
    private $voltagem;
    private $nome;

    //metodos
    public function __set($name, $value){
        $this->$name = $value;
    }

    public function __get($name){
        return $this->$name ;
    }
}

$eletroCozinha = new Eletronico("Domestico", 127);
echo "Categoria: " . $eletroCozinha->categoria;
echo "<br>";
echo "Voltagem: ". $eletroCozinha->voltagem . "W";

