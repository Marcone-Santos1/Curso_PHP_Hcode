<?php

$usuario = '';
$senha = '';
$database = '';
$host = '';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error){
    die("<p style=\"color: red;\">Falha ao conectar ao banco de dados...</p>" . $mysqli->error);
} 