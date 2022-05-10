<?php

class ProdutoDAO{
    public $conexao;


    // Método construtor que cria a conexao com o banco de dados através da classe PDO  
    public function __construct()
    {
        include 'MySQL.php';
        $this->conexao = new MySQL();
    }

    // Função que insere os valores salvos da model para a tabela produto
    public function insert(ProdutoModel $model){
        $sql = 'INSERT INTO produto(descricao, preco, id_categoria) VALUES (?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);
            
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(3, $model->id_categoria);

        $stmt->execute();
    }

    public function getAllRows(){
        $sql = 'SELECT * FROM view_produto';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function getById($id){
        $sql = 'SELECT * FROM view_produto';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
    }

    public function update(ProdutoModel $model){
        $sql = 'UPDATE produto SET descricao = ?, preco = ?, id_categoria = ? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(3, $model->id_categoria);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }

    public function delete(int $id){
        
    }
}