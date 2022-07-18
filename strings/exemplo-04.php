<?php 

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";
$q = strpos($frase, $palavra);
$texto = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($q);
var_dump($texto);

?>