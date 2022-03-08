<?php
        /*
          Classes Controller são responsáveis por processar as requisições do usuário.
          Isso significa que toda vez que um usuário chama uma rota, um método (função)
          de uma classe Controller é chamado.
          O método poderá devolver uma View (fazendo um include), acessar uma Model (para
          buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
          chamar outra Controller.
         */

class PessoaController{
    public static function index()
    {
        include 'View/modules/Pessoa/ListarPessoas.php';
    }

    public static function form()
    {
        include 'View/modules/Pessoa/FormPessoas.php';
    }

    public static function save()
    {

    }
}