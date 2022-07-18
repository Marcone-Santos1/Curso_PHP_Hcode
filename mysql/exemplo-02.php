<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'dbphp7');

$conn = new mysqli(HOST, USER, PASS, BASE);

if ($conn->connect_error){
    die("Falha ao conectar ao banco de dados... " . $conn->connect_error);
} 


$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    array_push($data, $row);
}

echo json_encode($data);