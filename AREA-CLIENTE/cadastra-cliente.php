<?php
require_once("../MODEL/Cliente.php");
require_once '../DAO/ClienteDao.php';

//header("Location: cadastro-cliente.php");

$cliente = new Cliente();

$cliente -> setNomeCliente($_POST['nome']);
$cliente -> setCpfCliente($_POST['cpf']);
$cliente -> setEmailCliente($_POST['email']);
$cliente -> setSenhaCliente($_POST['senha']);
$cliente -> setLogradouroCliente($_POST['logradouro']);
$cliente -> setNumLogCliente($_POST['numero']);
$cliente -> setCompCliente($_POST['comp']);
$cliente -> setBairroCliente($_POST['bairro']);
$cliente -> setCidadeCliente($_POST['cidade']);
$cliente -> setUfCliente($_POST['uf']);
$cliente -> setCepCliente($_POST['cep']);

ClienteDao::Cadastrar($cliente);

?>