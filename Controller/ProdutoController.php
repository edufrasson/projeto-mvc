<?php

class ProdutoController{
    public static function index(){
        include 'View/modules/Produto/ListarProduto.php';
    }
    public static function form(){
        include 'View/modules/Produto/FormProduto.php';
    }
    public static function save(){
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();

        $model->descricao = $_POST['descricao'];
        $model->preco = $_POST['preco'];

        $model->save();
    }
}