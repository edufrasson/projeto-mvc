<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionarios</title>

    <?php include './View/includes/css_config.php' ?>
</head>

<body>
    <header>
        <?php include 'View/includes/cabecalho.php' ?>
    </header>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arr_funcionarios as $funcionario) : ?>
                    <tr>
                        <th scope="row"><?= $funcionario->id ?></th>
                        <td><?= $funcionario->nome ?></td>
                        <td><?= $funcionario->cpf ?></td>
                        <td><?= $funcionario->data_nascimento ?></td>
                        <td class="update d-flex row">
                            <div class="update col-2">
                                <a href="/funcionario/ver?id=<?= $funcionario->id ?>">
                                    <i class='bx bx-edit'></i>
                                </a>
                            </div>
                            <div class="delete col-9">
                                <a href="/funcionario/deletar?id=<?= $funcionario->id ?>">
                                    <i class='bx bx-trash text-danger'></i>
                                </a>
                            </div>                          
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>


    <?php include 'View/includes/js_config.php' ?>
</body>

</html>