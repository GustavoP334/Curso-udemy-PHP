<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = ?");

$id = 2;

$stmt->execute(array($id));

//cancela a solicitação: $conn->rollback();
$conn->commit();

echo "Excluído!";

 ?>