<?php

$categoria = $_POST['categoria'];

include_once "../Conexao.php";

$pdo = Conexao::conectar();

$stmt = $pdo->prepare("insert into tbcategoria values
(null, '$categoria')");

$stmt->execute();

header("location: cadastro-categoria.php")

?>