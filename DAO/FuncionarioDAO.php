<?php

class FuncionarioDAO{

    private $conexao;

    public function __construct()
    {      
        include 'MySQL.php';
        $this->conexao = new MySQL();
    }
    
    public function insert(FuncionarioModel $model){
        $sql = 'INSERT INTO funcionario
                (nome, cpf, data_nascimento)
                VALUES 
                (?, ?, ?) ';

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome);   
        $stmt->bindValue(2, $model->cpf);  
        $stmt->bindValue(3, $model->data_nascimento);     

        $stmt->execute();
    }

    public function getAllRows(){
        $sql = 'SELECT * FROM funcionario';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function getById($id){
        $sql = 'SELECT * FROM funcionario WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel");
    }

    public function update(FuncionarioModel $model){

    }

    public function delete(int $id){

    }
}