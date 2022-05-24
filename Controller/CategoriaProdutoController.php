<?php

class CategoriaProdutoController{
    public static function index(){
        include 'Model/CategoriaProdutoModel.php';             

        $model = new CategoriaProdutoModel();

        $arr_categorias = $model->getAll();

        include 'View/modules/Categoria_Produto/ListarCategoriaProduto.php';
    }

    public static function form(){
        include 'View/modules/Categoria_Produto/FormCategoriaProduto.php';
    }

    public static function save(){
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();

        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];
        
        $model->save();

        header("Location: /categoria_produto");
    }

    public static function delete(){
        include 'Model/CategoriaProdutoModel.php';
        $categoria_produto = new CategoriaProdutoModel();
        if(isset($_GET['id']))
            $categoria_produto->delete($_GET['id']);

        header('Location: /categoria_produto');  
    }

    public static function ver(){
        include 'Model/CategoriaProdutoModel.php';
        $model = new CategoriaProdutoModel();
        
        $model = $model->getById($_GET['id']);
        
        include 'View/modules/Categoria_Produto/FormCategoriaProduto.php';    
    }
}