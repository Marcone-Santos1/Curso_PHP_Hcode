<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "CAlango00";
$pass = "OVO";
$id = 11;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados atualizados";

?>