<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>

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
                <?php foreach($arr_pessoas as $pessoa):?>
                <tr>
                    <th scope="row"><?= $pessoa->id ?></th>
                    <td><?= $pessoa->nome ?></td>
                    <td><?= $pessoa->data_nascimento ?></td>
                    <td><?= $pessoa->rg ?></td>
                    <td><?= $pessoa->cpf ?></td>
                    <td><?= $pessoa->email ?></td>
                    <td><?= $pessoa->telefone ?></td>
                    <td><?= $pessoa->endereco ?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>   


    <?php include 'View/includes/js_config.php' ?>
</body>
</html>