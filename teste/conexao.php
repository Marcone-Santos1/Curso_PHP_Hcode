<?php

$usuario = 'dbdcmarcone';
$senha = '4dn#N@%QEY9M';
$database = 'Lab_Marcone';
$host = 'database-dalacode.cradkmcvxrj4.sa-east-1.rds.amazonaws.com';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error){
    die("<p style=\"color: red;\">Falha ao conectar ao banco de dados...</p>" . $mysqli->error);
} 