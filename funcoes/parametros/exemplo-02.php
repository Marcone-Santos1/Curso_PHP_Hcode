<?php

// passagem de valor por referência

$a = 10;

function trocaValor(&$a){
// & = passagem de parametro por referência

    $a += 50;

    return $a;

}

echo $a;
echo "<br>";
echo trocaValor($a);