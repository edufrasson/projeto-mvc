<?php

class ProdutoController{

    // Criando as funções das rotas

    public static function index(){
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();

        $arr_produtos = $model->getAll();

        include 'View/modules/Produto/ListarProduto.php';
    }
    public static function form(){
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        $model->lista_categorias = $model->getAllCategorias();

        include 'View/modules/Produto/FormProduto.php';
    }
    public static function save(){
        include 'Model/ProdutoModel.php';

        // Instanciando um objeto da classe model
        $model = new ProdutoModel();

        // Inserindo os valores na model
        $model->descricao = $_POST['descricao'];
        $model->id_categoria = $_POST['id_categoria'];
        $model->preco = $_POST['preco'];

        // Salvando os valores
        $model->save();

        // Volta para a pagina do formulário
        header("Location: /produto/form");
    }
}