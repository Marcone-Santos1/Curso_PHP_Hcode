<?php

// passagem de valor por referĂȘncia

$a = 10;

function trocaValor(&$a){
// & = passagem de parametro por referĂȘncia

    $a += 50;

    return $a;

}

echo $a;
echo "<br>";
echo trocaValor($a);