<?php 

class pessoa {

    public $nome;

    public function falar(){

        return "O meu nome é:  ".$this->nome;

    }

}

$marcone = new pessoa();
$marcone->nome = "carlos";
echo $marcone->falar();