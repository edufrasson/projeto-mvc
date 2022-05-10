<?php

class FuncionarioModel{

    // Atributos (campos do banco de dados)
    public $id, $nome, $cpf;
    public $data_nascimento;

    public function save()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO;
        if($this->id !== null)
            $dao->insert($this);
        else
            $dao->update($this);    
    }

    public function getAll(){
        include 'DAO/FuncionarioDAO.php';
        $dao = new FuncionarioDAO();

        return $dao->getAllRows();
    }
}