<?php

class CategoriaProdutoModel{
    public $id, $descricao;

    public function save(){
        include 'DAO/CategoriaProdutoDAO.php';

        $dao = new CategoriaProdutoDAO();        
        /*  -- Operador Ternário -- 
        *    (empty($this->id)) ? $dao->insert($this) : $dao->update($this);
        */    
        if(empty($this->id))
            $dao->insert($this);
        else
            $dao->update($this);
    }

    public function getAll(){
        include 'DAO/CategoriaProdutoDAO.php';

        $dao = new CategoriaProdutoDAO();

        return $dao->getAllRows();
    }

    public function getById($id){
        include 'DAO/CategoriaProdutoDAO.php';
        $dao = new CategoriaProdutoDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        include 'DAO/CategoriaProdutoDAO.php';
        $dao = new CategoriaProdutoDAO();

        $dao->delete($id);
    }
}