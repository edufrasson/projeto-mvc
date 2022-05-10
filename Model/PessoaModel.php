<?php

class PessoaModel{

    // Atributos (campos do banco de dados)
    public $id, $nome, $cpf;
    public $data_nascimento;

    public function save()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO;

        $dao->insert($this);
    }

    public function getAll(){
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();

        return $dao->getAllRows();
    }

    public function getById($id){
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();

        return $dao->getById($id);
    }
}