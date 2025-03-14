<?php
//
    class Imoveis{

        public function __construct($arg01, $arg02, $arg03, $arg04, $arg05){
            $this->tipoImovel = $arg01;
            $this->valor = $arg02;
            $this->regiao = $arg03;
            $this->metragem = $arg04;
            $this->descricao = $arg05;
        }

        private string $tipoImovel;
        protected float $valor;
        public string $regiao;
        protected float $metragem;
        private string $descricao;


        function __set($name, $value){
            $this->$name = $value;
        }

        function __get($name){
            return $this->$name;
        }
        
    }

    //herança

    class rural extends Imoveis{
        //sobrecarga
        
        function __construct(){
            
        }
        
    }

    $imovel02 = new rural();
    


    $imovel01 = new Imoveis("Residencial", 280.000, "Zona Norte", 150, "Imóvel recém contruído" );
    //$imovel01->regiao = "Zona Norte";
    //$imovel01->tipoImovel = "Residencial";
    //$imovel01->valor = 280.000;
    //$imovel01->metragem = 150;
    //$imovel01->descricao= "Imóvel recém contruído"

    echo $imovel01->regiao;
    echo "\n";
    echo $imovel01->tipoImovel;
    echo "\n";
    echo $imovel01->valor;
    echo "\n";
    echo $imovel01->metragem;
    echo "\n";
    echo $imovel01->descricao;
    echo "\n";

?>