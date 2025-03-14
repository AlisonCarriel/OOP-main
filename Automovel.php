<?php
    //variavel

class Automovel{
    //public, private, protected
    //propriedade
    public $qtdRoda ;
    private $motor ;
    public $renavan ;
    public $cor ;
    private $qtdPorta ; 
    private $modelo ;
    public $fabricante ;
    public $anoFab ; 

    //metodos
    public function acelerar($vel){
        echo  $vel ." kh ";

    }

    // modificadores
        //atribui
    public function set_QtdePort($arg){
        $this->qtdPorta = $arg;
    }
    //exibir
    public function get_QtdePort(){
        return $this->qtdPorta ;
    }

    public function set_Motor($arg){
        $this->motor = $arg;
    }
    
    public function get_Motor(){
        return $this->motor ;
    }

    public function set_Modelo($arg){
        $this->modelo = $arg;
    }
    
    public function get_Modelo(){
        return $this->modelo ;
    }

    //magicos
    public function __set($name, $value){
        $this->$name = $value;
    }

    public function __get($name){
        return $this->$name ;
    }
}


//criar um objeto

$aut01 = new Automovel();
$aut02 = new Automovel();

$aut01->modelo = "astra";
$aut01->cor = "preto";
$aut01->anoFab = "2011";
$aut01->motor = 2.0;
//$aut01->set_QtdePort(4)
//$aut01->qtdPorta = 4;
$aut01->qtdPorta = "4";
$aut01->renavan = "12345678";
$aut01->qtdRoda = 5;
$aut01->fabricante = "chevrolet";

$aut02->modelo = "Celta";
$aut02->cor = "preto";
$aut02->anoFab = "2002";
$aut02->motor = 1.0;
//$aut01->set_QtdePort(2
//$aut02->qtdPorta = 2;
$aut02->qtdPorta = "2";
$aut02->renavan = "5458247163";
$aut02->qtdRoda = 4;
$aut02->fabricante = "chevrolet";

echo " MODELO: " . $aut01->modelo;
echo "<br>";
echo "MOTOR: " . $aut01->motor;
echo "<br>";
echo "PORTAS: " . $aut01->qtdPorta; //tanto public ou get-set magico
//echo "PORTAS: " . $aut01->get_QtdePort(4);
echo "<hr>";
echo "MODELO: " . $aut02->modelo;
echo "<br>";
echo "MOTOR: " . $aut02->motor;
echo "<br>";
echo "PORTAS: " . $aut02->qtdPorta;
//echo "PORTAS: " . $aut02->get_QtdePort(4);
