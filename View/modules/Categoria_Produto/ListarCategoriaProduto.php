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
    <header>
        <?php include 'View/includes/cabecalho.php' ?>
    </header>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arr_categorias as $categoria) : ?>
                    <tr>
                        <th scope="row"><?= $categoria->id ?></th>
                        <td><?= $categoria->descricao ?></td>
                        <td class="update d-flex row">
                            <div class="update col-2">
                                <a href="/ver?id=<?= $categoria->id ?>">
                                    <i class='bx bx-edit'></i>
                                </a>
                            </div>
                            <div class="delete col-9">
                                <a href="/deletar?id=<?= $categoria->id ?>">
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