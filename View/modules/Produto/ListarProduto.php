<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Categorias de Produto</title>

        <?php include 'View/includes/css_config.php' ?>
    </head>

    <body>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($arr_produtos as $produto) : ?>
                        <tr>
                            <th scope="row"><?= $produto->id ?></th>
                            <td><?= $produto->descricao ?></td>
                            <td><?= $produto->categoria ?></td>
                            <td><?= $produto->preco ?></td>
                            <td class="actions">
                                <a href="/ver?id=<?= $produto->id ?>">
                                    <i class='bx bx-edit '></i>
                                </a>

                                <a href="/deletar?id=<?= $produto->id ?>">
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
</body>

</html>