<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 10;

$stmt->execute(array($id));

// $conn->rollback();
// $conn->commit();

echo "Dado deletado";

?>