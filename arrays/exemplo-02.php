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

print_r($pessoas);
echo "<br>";
print_r($pessoas[3]);
echo "<br>";
print_r($pessoas[0]['Idade']);
?>