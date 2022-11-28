<?php

include "../conexao.php";

    class Produto{
        private $id;
        private $nomeProduto;
        private $categoriaProduto;
        private $precoProduto;
        private $foto;

        public function getFoto(){
            return $this -> foto;
        }

        public function getId(){
            return $this -> id;
        }

        public function getNomeProduto(){
            return $this -> nomeProduto;
        }

        public function getPrecoProduto(){
            return $this -> precoProduto;
        }

        public function getCategoriaProduto(){
            return $this -> categoriaProduto;
        }

        public function setFoto($foto){
            $this -> foto = $foto;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setNomeProduto($nomeProduto){
            $this -> nomeProduto = $nomeProduto;
        }

        public function setPrecoProduto($precoProduto){
            $this -> precoProduto = $precoProduto;
        }
        
        public function setcategoria($categoriaProduto){
            $this -> categoriaProduto = $categoriaProduto;
        }
        
    }

?>