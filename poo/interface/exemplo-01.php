<?php  

interface Veiculo
{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMacha($marcha);

}

class Civic implements Veiculo
{
	public function acelerar($velocidade)
	{
		echo "O Veiculo acelerou até ". $velocidade ."Km/h";
	}
	
	public function frenar($velocidade)
	{
		echo "O Veiculo frenou até atingir ". $velocidade . "Km/h";
	}	

	public function trocarMacha($marcha)
	{
		echo "O Veiculo engatou a marcha ".$marcha;
	}
}

$carro = new Civic();
$carro->trocarMacha(2);


?>