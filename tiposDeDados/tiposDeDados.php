<?php

$anoAtual = 2022;
$anoNascimento = 2004;
$nomeCompleto = "Marcone Santos Magalhães";
$idade = $anoAtual - $anoNascimento;

// apagar variável
// isset();
// verificar se a variável foi definida
if (isset($nomeCompleto)) {

    echo($nomeCompleto);
    echo "<br>";
    echo $nomeCompleto . " você tem: " . $idade . " anos.";

}

?>