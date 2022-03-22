<?php

class ProdutoModel{
    public $descricao, $preco;

    public function save(){
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO;

        $dao->insert($this);
    }
}