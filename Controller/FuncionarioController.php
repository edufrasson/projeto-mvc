<?php
        /*
          Classes Controller são responsáveis por processar as requisições do usuário.
          Isso significa que toda vez que um usuário chama uma rota, um método (função)
          de uma classe Controller é chamado.
          O método poderá devolver uma View (fazendo um include), acessar uma Model (para
          buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
          chamar outra Controller.
         */

class FuncionarioController{
    public static function index()
    {
        include 'Model/FuncionarioModel.php';

        $model = new FuncionarioModel();

        $arr_funcionarios = $model->getAll();

        include 'View/modules/Funcionario/ListarFuncionario.php';
    }

    public static function form()
    {
        include 'View/modules/Funcionario/FormFuncionario.php';
    }

    public static function save()
    {
        include 'Model/FuncionarioModel.php';
        
        $funcionario = new FuncionarioModel();

        $funcionario->nome = $_POST['nome'];
        $funcionario->rg = $_POST['rg'];
        $funcionario->cpf = $_POST['cpf'];
        $funcionario->data_nascimento = $_POST['data_nascimento'];
        $funcionario->email = $_POST['email'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->endereco = $_POST['endereco'];

        $funcionario->save();
    }
}