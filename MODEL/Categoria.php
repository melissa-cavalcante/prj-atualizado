<?php

include "../conexao.php";

    class Categoria{
        private $id;
        private $categoria;

        public function getId(){
            return $this -> id;
        }

        public function getCategoria(){
            return $this -> categoria;
        }

        public function setId($id){
            $this -> id = $id;
        }
        
        public function setcategoria($categoria){
            $this -> categoria = $categoria;
        }
        
    }

?>
