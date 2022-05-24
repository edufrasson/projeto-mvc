<?php

class ProdutoModel{
    public $id, $descricao, $preco, $id_categoria, $categoria;

    /*
    * Variável onde são armazenadas as informações do método 
    */
    public $lista_categorias;

    public function save(){
        include_once 'DAO/ProdutoDAO.php';
        
        // Instanciando um objeto da classe ProdutoDAO
        $dao = new ProdutoDAO();

        // Inserindo o próprio objeto model para a classe DAO
        if(empty($this->id))
            $dao->insert($this);
        else    
            $dao->update($this);
    }

    public function getAll(){
        include_once 'DAO/ProdutoDAO.php';
        $dao = new ProdutoDAO();

        return $dao->getAllRows();
    }

    /**
     * Função que retorna todos os valores da tabela categoria, que é fk de produto  
     * */ 
    public function getAllCategorias(){
        include_once 'DAO/CategoriaProdutoDAO.php';
        $dao = new CategoriaProdutoDAO();

        return $dao->getAllRows();
    }

    public function getById($id){
        include_once 'DAO/ProdutoDAO.php';
        $dao = new ProdutoDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        include 'DAO/ProdutoDAO.php';
        $dao = new ProdutoDAO();

        $dao->delete($id);
    }
    
}