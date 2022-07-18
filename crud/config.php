<?php  

// definindo as constantes
define('HOST', '');
define('USER', '');
define('PASS', '');
define('BASE', '');

// definindo a conexão

$conn = new MySQLi(HOST, USER, PASS, BASE);


if ($conn->error){
    die("<p style=\"color: red;\">Falha ao conectar ao banco de dados...</p>" . $conn->error);
} 

?>