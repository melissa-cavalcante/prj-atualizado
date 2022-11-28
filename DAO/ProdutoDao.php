<?php
    require_once '../MODEL/Produto.php';
    require_once '../Conexao.php';

    class ProdutoDao{
         public static function atualizarFoto($produto){
            $conexao = Conexao::conectar();
            
            $queryInsert = "UPDATE tbproduto
                           SET fotoProduto = ?
                           WHERE idproduto = ?";

            $prepareStatement = $conexao->prepare($queryInsert);

            $prepareStatement->bindValue(1, $produto->getFoto());
            $prepareStatement->bindValue(2, $produto->getId());

            $prepareStatement-> execute();
            return 'Atualizou';
         }

        public static function consultarId($produto){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idproduto FROM tbproduto WHERE nomeProduto LIKE '".$produto->getNome()."'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $produto)
                $id = $produto['idproduto'];
            return $id;   
        }

        public function delete($idProduto){
            $con = Conexao::conectar();
            $query="delete from tbproduto where idProduto = $idProduto";
            $resultado = $con->query($query);
            return $resultado;
        }
    }