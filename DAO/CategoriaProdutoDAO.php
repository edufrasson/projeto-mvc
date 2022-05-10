<?php

class CategoriaProdutoDAO{
    public $conexao;

    public function __construct()
    {
        include 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(CategoriaProdutoModel $model){
        $sql = 'INSERT INTO categoria_produto(descricao) VALUES (?)';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();
    }

    public function getAllRows(){
        $sql = 'SELECT * FROM categoria_produto';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function getById($id){
        $sql = 'SELECT * FROM categoria_produto WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CategoriaProdutoModel");
    }

    public function update(CategoriaProdutoModel $model){
        $sql = 'UPDATE categoria_produto SET descricao = ? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);          
        $stmt->execute();
    }

    public function delete(int $id){
        $sql = 'DELETE FROM categoria_produto WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
