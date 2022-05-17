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
    <header>
        <?php include 'View/includes/cabecalho.php' ?>
    </header>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Ações</ths>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arr_pessoas as $pessoa) : ?>
                    <tr>
                        <th scope="row"><?= $pessoa->id ?></th>
                        <td><?= $pessoa->nome ?></td>
                        <td><?= $pessoa->cpf ?></td>
                        <td><?= $pessoa->data_nascimento ?></td>
                        <td class="actions">
                            <a href="/ver?id=<?= $pessoa->id ?>">
                                <i class='bx bx-edit '></i>
                            </a>

                            <a href="/deletar?id=<?= $pessoa->id ?>">
                                <i class='bx bx-trash text-danger'></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>


    <?php include 'View/includes/js_config.php' ?>
</body>

</html>