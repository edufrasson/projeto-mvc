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
}
