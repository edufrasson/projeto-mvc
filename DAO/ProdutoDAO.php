<?php

class ProdutoDAO{
    public $conexao;


    // Método construtor que cria a conexao com o banco de dados através da classe PDO  
    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3307;dbname=db_sistema';
        $user = 'root';
        $pass = 'etecjau';

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    // Função que insere os valores salvos da model para a tabela produto
    public function insert(ProdutoModel $model){
        $sql = 'INSERT INTO produto(descricao, preco) VALUES (?, ?)';

        $stmt = $this->conexao->prepare($sql);
            
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->preco);

        $stmt->execute();
    }

    public function getAllRows(){
        $sql = 'SELECT * FROM produto';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}