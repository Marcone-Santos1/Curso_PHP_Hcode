<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'dbphp7');

$conn = new mysqli(HOST, USER, PASS, BASE);

if ($conn->connect_error){
    die("Falha ao conectar ao banco de dados... " . $conn->connect_error);
} 

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "dasdads";
$pass = "dsadafrfdadfefasfa";

$stmt->execute();
