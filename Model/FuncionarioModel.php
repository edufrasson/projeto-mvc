<?php

class FuncionarioModel{

    // Atributos (campos do banco de dados)
    public $id, $nome, $cpf;
    public $data_nascimento;

    public function save()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        if(empty($this->id))
            $dao->insert($this);
        else    
            $dao->update($this);  
    }

    public function getAll(){
        include 'DAO/FuncionarioDAO.php';
        $dao = new FuncionarioDAO();

        return $dao->getAllRows();
    }

    public function getById($id){
        include 'DAO/FuncionarioDAO.php';
        $dao = new FuncionarioDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        include 'DAO/FuncionarioDAO.php';
        $dao = new FuncionarioDAO();

        $dao->delete($id);
    }
}