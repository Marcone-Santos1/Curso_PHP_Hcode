<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Yasmin014";
$pass = "CAlango";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);

$stmt->execute();

echo "Dados inseridos";