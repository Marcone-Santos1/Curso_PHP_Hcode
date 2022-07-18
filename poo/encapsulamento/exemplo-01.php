<?php  

	class Pessoa{

		public $nome = "Rasmus Ledorf";
		protected $idade = 48;
		private $senha = "1234560";

		public function exibirDados(){
			
			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha;
		
		}

	}

	$objeto = new Pessoa();

	// echo $objeto->nome."<br>";
	// echo $objeto->idade."<br>";
	// echo $objeto->senha."<br>";

	$objeto->exibirDados()
?>