<?php

class ProdutoController{

    // Criando as funções das rotas

    public static function index(){
        include 'View/modules/Produto/ListarProduto.php';
    }
    public static function form(){
        include 'View/modules/Produto/FormProduto.php';
    }
    public static function save(){
        include 'Model/ProdutoModel.php';

        // Instanciando um objeto da classe model
        $model = new ProdutoModel();

        // Inserindo os valores na model
        $model->descricao = $_POST['descricao'];
        $model->preco = $_POST['preco'];

        // Salvando os valores
        $model->save();

        // Volta para a pagina do formulário
        header("Location: /produto/form");
    }
}