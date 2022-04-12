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
                </tr>
            </thead>
            <tbody>
                <?php foreach($arr_categorias as $categoria):?>
                <tr>
                    <th scope="row"><?= $categoria->id ?></th>
                    <td><?= $categoria->descricao ?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>   


    <?php include 'View/includes/js_config.php' ?>
</body>
</html>