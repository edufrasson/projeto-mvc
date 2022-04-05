<?php

class CategoriaProdutoModel{
    public $id, $descricao;

    public function save(){
        include 'DAO/CategoriaProdutoDAO.php';

        $dao = new CategoriaProdutoDAO();
        $dao->insert($this);
    }
}