<?php 

    class Cliente{
        private $id;
        private $nomeCliente;
        private $cpfCliente;
        private $emailCliente;
        private $senhaCliente;
        private $logradouroCliente;
        private $numLogCliente;
        private $compCliente;
        private $bairroCliente;
        private $cidadeCliente;
        private $ufCliente;
        private $cepCliente;


        //Getters//

        public function getId(){
            return $this->id;
        }

        public function getNomeCliente(){
            return $this->nomeCliente;
        }

        public function getCpfCliente(){
            return $this->cpfCliente;
        }
        
        public function getEmailCliente(){
            return $this->emailCliente;
        }

        public function getSenhaCliente(){
            return $this->senhaCliente;
        }

        public function getLogradouroCliente(){
            return $this->logradouroCliente;
        }

        public function getNumLogCliente(){
            return $this->numLogCliente;
        }

        public function getCompCliente(){
            return $this->compCliente;
        }

        public function getBairroCliente(){
            return $this->bairroCliente;
        }

        public function getCidadeCliente(){
            return $this->cidadeCliente;
        }

        public function getUfCliente(){
            return $this->ufCliente;
        }

        public function getCepCliente(){
            return $this->cepCliente;
        }

        //Setters//

        public function setId($id){
            $this -> id = $id;
        }

        public function setNomeCliente($nomeCliente){
            $this -> nomeCliente = $nomeCliente;
        }

      /* public function setCpfCliente($cpfCliente){
            $this -> cpfCliente = $cpfCliente;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setId($id){
            $this -> id = $id;
        }
*/
    }

?>