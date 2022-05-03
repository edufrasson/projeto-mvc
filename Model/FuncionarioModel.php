<?php

class FuncionarioModel{

    // Atributos (campos do banco de dados)
    public $id, $nome, $rg, $cpf, $telefone;
    public $data_nascimento, $email, $endereco;

    public function save()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO;

        $dao->insert($this);
    }

    public function getAll(){
        include 'DAO/FuncionarioDAO.php';
        $dao = new FuncionarioDAO();

        return $dao->getAllRows();
    }
}