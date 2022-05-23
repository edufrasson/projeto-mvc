<?php

$uri_parse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/CategoriaProdutoController.php';
include 'Controller/FuncionarioController.php';
// :: -> operador de resolução de escopo
// Escopo -> meio 

switch($uri_parse){

    case '/home':
        include 'View/modules/Home/Home.php';
    break;    

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

    case '/pessoa/deletar':
        PessoaController::delete();
    break;

    case '/pessoa/ver':
        PessoaController::ver();
    break;

    // Rotas de funcionario
    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;
        
    case '/funcionario/save':
        FuncionarioController::save();
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

    // Rotas de categoria

    case '/categoria_produto':
        CategoriaProdutoController::index();
    break;    

    case '/categoria_produto/form':
        CategoriaProdutoController::form();
    break;
    
    case '/categoria_produto/save':
        CategoriaProdutoController::save();
    break;   

    /*default:
        header("Location: /home");
    break;*/
}