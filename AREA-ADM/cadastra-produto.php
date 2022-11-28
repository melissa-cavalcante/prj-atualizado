<?php

$produto = $_POST['produto'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$nomeFoto = $_FILES['foto']['name']; //essa parte ta pegando o nome da foto que ta no array foto que é puxado pelo $_files

move_uploaded_file($_FILES['foto']['tmp_name'], '../img/'.$nomeFoto); 
//aqui ele ta movendo o arquivo que ta dentro do $_files - os parametros sao (de:, para:) 
//$_FILES['foto']['tmp_name'] = aonde o arquivo ta - '../img/'.$nomeFoto = pra onde ele vai

include_once "../Conexao.php";

$pdo = Conexao::conectar();

$stmt = $pdo->prepare("insert into tbproduto(idProduto, nomeProduto, precoProduto, idCategoria, fotoProduto) values
(null, '$produto', '$preco', '$categoria', '$nomeFoto')"); //aqui ele ta passando o nome da foto

$stmt->execute();

header("location: produto.php");

?>