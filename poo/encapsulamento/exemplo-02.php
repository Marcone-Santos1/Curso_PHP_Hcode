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

	class Programador extends Pessoa {

		public function exibirDados(){
			
			echo get_class($this)."<br>";
			
			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha;
		
		}

	}

	$objeto = new Programador();

	// echo $objeto->nome."<br>";
	// echo $objeto->idade."<br>";
	// echo $objeto->senha."<br>";

	$objeto->exibirDados();
?>