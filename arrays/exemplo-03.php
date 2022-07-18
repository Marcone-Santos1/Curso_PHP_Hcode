<?php

$pessoas = array();

array_push($pessoas, array(
    'Nome' => 'Marcone',
    'Idade' => 18

));

array_push($pessoas, array(
    'Nome' => 'Lucas',
    'Idade' => 22

));

array_push($pessoas, array(
    'Nome' => 'Marcos',
    'Idade' => 16

));

array_push($pessoas, array(
    'Nome' => 'Kelly',
    'Idade' => 14

));

array_push($pessoas, array(
    'Nome' => 'Luana',
    'Idade' => 19

));

echo json_encode($pessoas);

?>