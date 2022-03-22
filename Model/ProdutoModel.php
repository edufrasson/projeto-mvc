<?php

class ProdutoModel{
    public $descricao, $preco;

    public function save(){
        include 'DAO/ProdutoDAO.php';
        
        // Instanciando um objeto da classe ProdutoDAO
        $dao = new ProdutoDAO;

        // Inserindo o próprio objeto model para a classe DAO
        $dao->insert($this);
    }
}