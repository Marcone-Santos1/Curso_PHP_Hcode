<?php

$nome = "Marcone";
$site = "www.hcode.com.br";

$ano = 1990;
$salario = 5500.50;
$bloqueado = false; 

//////////////////////////////////////////

// dados compostos

$frutas = array("Banana", "Laranja", "Manga", "Limão", "Uva");

// echo $frutas[2];

$nascimento = new DateTime();

var_dump($nascimento);

echo "<br>";

//////////////////////////////////////////////

$arquivo = fopen("exemplo-02.php", "r");

// var_dump($arquivo);

$nulo = NULL;
// var_dump($nulo);

?>