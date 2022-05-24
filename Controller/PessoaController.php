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
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        $arr_pessoas = $model->getAll();

        include 'View/modules/Pessoa/ListarPessoas.php';
    }

    public static function form()
    {
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();

        include 'View/modules/Pessoa/FormPessoas.php';
    }

    public static function ver(){
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();
        
        $model = $model->getById($_GET['id']);
        
        include 'View/modules/Pessoa/FormPessoas.php';    
    }

    public static function save()
    {
        include 'Model/PessoaModel.php';
        
        $pessoa = new PessoaModel();       

        $pessoa->id = $_POST['id'];
        $pessoa->nome = $_POST['nome'];       
        $pessoa->cpf = $_POST['cpf'];
        $pessoa->data_nascimento = $_POST['data_nascimento'];   
 
        $pessoa->save();

        header('Location: /pessoa');
    }

    public static function delete(){
        include 'Model/PessoaModel.php';
        $pessoa = new PessoaModel();
        if(isset($_GET['id']))
            $pessoa->delete($_GET['id']);

        header('Location: /pessoa');  
    }
}