<?php

    class RetanguloTeste{
        protected $altura;
        protected $largura;

        function __construct($altura,$largura){
            $this->altura = $altura;
            $this->largura = $largura;
        }


        function __set($name, $value)
        {
            $this->$name = $value;
        }

        function __get($name)
        {
            return $this->$name;
        }

        public function getArea(){
            return $this->altura * $this->largura;
        }

        public function getPerimetro(){
            return 2* ($this->altura + $this->largura);
        }


    }

//herança

class Ret extends RetanguloTeste{

    function __construct(){
        //
        
    }


    //pra chamar precisa usar o self no lugar do parent
    public function getArea(){
        return $this->altura * $this->largura;
    }

    function CalcularCusto($valor){
       return $valor * parent::getArea();
    }


} 





 //objeto
$retangulo01 = new RetanguloTeste(10, 5);
$retangulo01->altura=5;
$retangulo01->largura=2;
echo ("alutra {$retangulo01->altura} <br>");
echo ("largura {$retangulo01->largura} <br>");
echo "Area {$retangulo01->getArea()} <br>";
echo "Perimetro {$retangulo01->getPerimetro()} <br>";


//objeto da classe herdeira Ret
$retangulo02Filha = new Ret();
$retangulo02Filha->altura=35;
$retangulo02Filha->largura=42;
echo ("<br>");
echo ("alutra {$retangulo02Filha->altura} <br>");
echo ("largura {$retangulo02Filha->largura} <br>");
echo "Area {$retangulo02Filha->getArea()} <br>";
echo "Perimetro {$retangulo02Filha->getPerimetro()} <br>";