<?php

class CategoriaProdutoController{
    public static function index(){
        include 'Model/CategoriaProdutoModel.php';             

        include 'View/modules/Categoria_Produto/ListarCategoriaProduto.php';
    }

    public static function form(){
        include 'View/modules/Categoria_Produto/FormCategoriaProduto.php';
    }

    public static function save(){
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();

        $model->descricao = $_POST['descricao'];
        $model->save();

        header("Location: /categoria_produto/form");
    }
}