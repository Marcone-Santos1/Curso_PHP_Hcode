<?php  

// constante

define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;

echo "<br>";

// array constante

// simulando uma conexão com um banco de dados
define("BANCO_DE_DADOS", [

	'17.0.0.1',
	'root',
	'password',
	'test'

], true /* definindo como case sensitive */ );

print_r(BANCO_DE_DADOS);

echo "<br>";

echo phpversion();

echo "<br>";
echo DIRECTORY_SEPARATOR;

?>