<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionarios</title>

    <?php include 'View/includes/css_config.php' ?>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">RG</th>
                    <th scope="col">CPF</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($arr_funcionarios as $funcionario):?>
                <tr>
                    <th scope="row"><?= $funcionario->id ?></th>
                    <td><?= $funcionario->nome ?></td>
                    <td><?= $funcionario->data_nascimento ?></td>
                    <td><?= $funcionario->rg ?></td>
                    <td><?= $funcionario->cpf ?></td>
                    <td><?= $funcionario->email ?></td>
                    <td><?= $funcionario->telefone ?></td>
                    <td><?= $funcionario->endereco ?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>   


    <?php include 'View/includes/js_config.php' ?>
</body>
</html>