<?php  

class carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo()
	{
		return $this->modelo;
	}

	public function setModelo($modelo)
	{
		$this->modelo = $modelo;
	}

	public function getMotor():float
	{
		return $this->motor;
	}

	public function setMotor($motor)
	{
		$this->motor = $motor;
	}

	public function getAno():int
	{
		return $this->ano;
	}

	public function setAno($ano)
	{
		$this->ano = $ano;
	}

	public function exibe(){
		return array(
			'Modelo'=>$this->getModelo(),
			'Motor'=>$this->getMotor(),
			'Ano'=>$this->getAno()
		);
	}
}

$gol = new carro();
$gol->setModelo("Gol gt");
$gol->setMotor("1.6");
$gol->setAno("2017");

$uno = new carro();
$uno->setModelo("Uno");
$uno->setMotor("1.2");
$uno->setAno("2006");

var_dump($gol->exibe());
var_dump($uno->exibe());

?>