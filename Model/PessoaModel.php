<?php

class PessoaModel{

    // Atributos (campos do banco de dados)
    public $id, $nome, $rg, $cpf, $telefone;
    public $data_nascimento, $email, $endereco;

    public function save()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO;

        $dao->insert($this);
    }
}