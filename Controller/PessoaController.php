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
        include 'Model/PessoaModel.php';
        
        $pessoa = new PessoaModel();

        $pessoa->nome = $_POST['nome'];
        $pessoa->rg = $_POST['rg'];
        $pessoa->cpf = $_POST['cpf'];
        $pessoa->data_nascimento = $_POST['data_nascimento'];
        $pessoa->email = $_POST['email'];
        $pessoa->telefone = $_POST['telefone'];
        $pessoa->endereco = $_POST['endereco'];

        var_dump($pessoa);
    }
}