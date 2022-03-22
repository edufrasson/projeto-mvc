<?php

class ProdutoDAO{
    public $conexao;

    public function __construct()
    {
        include 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(ProdutoModel $model){
        $sql = 'INSERT INTO produto(descricao, preco) VALUES (?, ?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->preco);

        $stmt->execute();
    }
}