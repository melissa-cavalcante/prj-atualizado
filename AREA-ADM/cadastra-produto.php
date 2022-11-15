<?php

$produto = $_POST['produto'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];

include_once "../Conexao.php";

$pdo = Conexao::conectar();

$stmt = $pdo->prepare("insert into tbproduto values
(null, '$produto', '$preco', '$categoria')");

$stmt->execute();

header("location: produto.php")

?>