<?php

// pegar dados através da URL, usasse o método GET

// $nome =  (int)$_GET["a"];
// $nomeb = (int)$_GET["b"];

////////////////////////////

// echo $nome . "<br>";
// echo $nomeb . "<br>";

////////////////////////////
// Mostrando o tipo da variável

// var_dump($nome . " " . $nomeb);

////////////////////////////////
// Mostrando o IP do usuário

$arquivo = $_SERVER["SCRIPT_NAME"]; // saber o nome do arquivo
$ip = $_SERVER["REMOTE_ADDR"]; // saber o IP do Usuário

echo $ip . "<br>";
echo $arquivo;

?>