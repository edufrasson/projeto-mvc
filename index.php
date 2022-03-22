<?php

$uri_parse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
// :: -> operador de resolução de escopo
// Escopo -> meio 

switch($uri_parse){

    // Rotas de pessoa
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;
        
    case '/pessoa/save':
        PessoaController::save();
    break; 
    

    // Rotas de Produto
    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;
        
    case '/produto/save':
        ProdutoController::save();
    break; 
}