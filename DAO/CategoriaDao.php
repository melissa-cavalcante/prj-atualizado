<?php
include_once "../Conexao.php";

class Categoria{
    
    public function delete($idCategoria){
        $query="DELETE FROM tbCategoria WHERE idCategoria = $idCategoria";

        $con = Conexao::conectar();
        
        $con->query($query);
    }
    
}
