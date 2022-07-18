<?php

$pessoa = array(
    'Nome' => 'João',
    'Idade' => 18
);

foreach ($pessoa as &$value){

    if (gettype($value) === 'integer') $value += 10;

    echo $value . "<br>";
}

var_dump($pessoa);