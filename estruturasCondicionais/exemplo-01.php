<?php 

// estrutura básica de condição

$qualASuaIdade = 17;

$idadeMaior = 18;

if ($qualASuaIdade < $idadeMaior) {
	echo "É uma Criança";
} else {
	echo "Não é uma criança";	
}


echo "<br>";

// operador ternário

echo ($qualASuaIdade < $idadeMaior)?"menor de idade":"Maior de idade";

?>