<?php

header("Location: produto.php");

//nome original do arquivo no computador do usuário
$nome = $_FILES['foto']['name'];

//para validações que possam ser necessárias, na nossa loja não será origatório
$tipo =$_FILES['foto']['type'];// exemplo image/gif
$tamanho = $_FILES['foto']['size']; // tamanho em bytes

//nome temporário do arquivo como foi armazenado no servidor, é o ARQUIVO!!!
$arquivo = $_FILES['foto']['tmp_name'];

$diretorio = "images/produtos/";

$extensao = substr($nome, -4);//pega o ponto e os 3 caracteres da extensão do arquivo
$nomenovo = $produto->getId().$extensao;

$nomecompleto =  $diretorio.$nomenovo;

move_uploaded_file($arquivo, "../".$nomecompleto);

$produto->setFoto($nomecompleto);

ProdutoDao::atualizarFoto($produto);

?>