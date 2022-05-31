<?php

// escopo de variáveis

$nome = "Marcone";

function teste() {
	global $nome;
	echo $nome;
	echo "<br>";
}

function teste2(){
	
	$nome = "Carlos";
	echo $nome;

}

teste();
teste2();

?>