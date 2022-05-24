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
        include 'Model/CategoriaProdutoModel.php';
        $model_categoria = new CategoriaProdutoModel();
        $categorias_arr = $model_categoria->getAll();

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

        // Volta para a pagina de listagem
        header("Location: /produto");
    }

    public static function delete(){
        include 'Model/ProdutoModel.php';
        $produto = new ProdutoModel();
        if(isset($_GET['id']))
            $produto->delete($_GET['id']);

        header('Location: /Produto');  
    }

    public static function ver(){
        
        include 'Model/ProdutoModel.php';
        include 'Model/CategoriaProdutoModel.php';

        $model_produto = new ProdutoModel();     
        $dados_produto = $model_produto->getById($_GET['id']);

        $model_categoria = new CategoriaProdutoModel();
        $categorias_arr = $model_categoria->getAll();
        
        include 'View/modules/Produto/FormProduto.php';    
    }
}