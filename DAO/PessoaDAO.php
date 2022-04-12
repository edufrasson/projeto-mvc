<?php

class PessoaDAO{

    private $conexao;

    public function __construct()
    {      
        include 'MySQL.php';
        $this->conexao = new MySQL();
    }
    
    public function insert(PessoaModel $model){
        $sql = 'INSERT INTO pessoa
                (nome, rg, cpf, email, data_nascimento, telefone, endereco)
                VALUES 
                (?, ?, ?, ?, ?, ?, ?)  ';

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rg);
        $stmt->bindValue(3, $model->cpf);
        $stmt->bindValue(4, $model->email);
        $stmt->bindValue(5, $model->data_nascimento);
        $stmt->bindValue(6, $model->telefone);
        $stmt->bindValue(7, $model->endereco);

        $stmt->execute();
    }

    public function getAllRows(){
        $sql = 'SELECT * FROM pessoa';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}