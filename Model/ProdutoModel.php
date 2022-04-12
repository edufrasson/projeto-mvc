<?php

class ProdutoModel{
    public $descricao, $preco;

    /*
    * Variável onde são armazenadas as informações do método 
    */
    public $lista_categorias;

    public function save(){
        include 'DAO/ProdutoDAO.php';
        
        // Instanciando um objeto da classe ProdutoDAO
        $dao = new ProdutoDAO;

        // Inserindo o próprio objeto model para a classe DAO
        $dao->insert($this);
    }

    public function getAll(){
        include 'DAO/ProdutoDAO.php';
        $dao = new ProdutoDAO();

        return $dao->getAllRows();
    }

    /**
     * Função que retorna todos os valores da tabela categoria, que é fk de produto  
     * */ 
    public function getAllCategorias(){
        include 'DAO/CategoriaProdutoDAO.php';
        $dao = new CategoriaProdutoDAO();

        return $dao->getAllRows();
    }
    
}