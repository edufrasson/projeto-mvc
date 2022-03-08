<?php

$uri_parse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

include 'Controller/PessoaController.php';

switch($uri_parse){
    case '/pessoa':
        PessoaController::index();
    break;
    
    case '/pessoa/form':
        PessoaController::form();
    break;
        
    case '/pessoa/save':
        PessoaController::save();
    break;        
}