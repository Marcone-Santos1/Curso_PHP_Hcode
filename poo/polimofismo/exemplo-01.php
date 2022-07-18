<?php 

abstract class Animal 
{
	public function falar()
	{
		return "Som";
	}

	public function mover()
	{
		return "Anda";
	}
}

class Cachorro extends Animal
{

	public function falar()
	{
		return "Late";
	}

}

class Lobo extends Animal
{

	public function falar()
	{
		return "Uiva";
	}

}


class Gato extends Animal
{

	public function falar()
	{
		return "Mia";
	}

}

class Passaro extends Animal
{

	public function falar()
	{
		return "Pia";
	}	

	public function mover()
	{
		return "Voa e ". parent::mover();
	}

}

$pluto = new Cachorro();
echo $pluto->falar();

echo "<br>";
echo "----------------------------------------------------------";
echo "<br>";

$lobo = new Lobo();
echo $lobo->falar();

echo "<br>";
echo "----------------------------------------------------------";
echo "<br>";

$gato = new Gato();
echo $gato->falar();

echo "<br>";
echo "----------------------------------------------------------";
echo "<br>";


$pintinho = new Passaro();
echo $pintinho->falar();
echo "<br>";
echo $pintinho->mover();

?>