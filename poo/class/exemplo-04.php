<?php  

// métodos mágicos

// criando a class endereço
class endereco{

	// setando as váriaveis privadas
	private $logradouro;
	private $numero;
	private $cidade;


	// usando o método mágico __construct
	public function __construct($a, $b, $c){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	// public function __destruct(){

	// 	var_dump("Destruiu");

	// }

	public function __toString(){

		return $this->logradouro.", ".$this->numero.", ".$this->cidade;

	}

}

$newEndereco = new endereco("Rua José Ribeiro Ramos", 28, "São Paulo");

// var_dump($newEndereco);

// unset($newEndereco);

echo $newEndereco; 

?>