<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionarios</title>
    <?php include './View/includes/css_config.php' ?>
</head>

<body>
    <header>
        <?php include 'View/includes/cabecalho.php' ?>
    </header>
    <div class="container">
        <form class="form" action="/funcionario/save" method="post">
            <fieldset class="form-group">
                <legend>Cadastro de Funcionarios</legend>
                <br>

                <input type="hidden" value="<?= $model->id ?>" name="id">

                <label for="nome">Nome:</label>
                <input class="form-control mb-3" type="text" name="nome" id="nome"
                value="<?= $model->nome ?>"
                >

                <br>
                <label for="cpf">CPF:</label>
                <input class="form-control mb-3" type="number" name="cpf" id="cpf"
                value="<?= $model->cpf ?>"
                >

                <br>
                <label for="data_nascimento">Data Nascimento:</label>
                <input class="form-control mb-3" type="date" name="data_nascimento" id="data_nascimento"
                value="<?= $model->data_nascimento ?>"
                >

                <br>

                <button class="btn btn-primary" type="submit">Enviar</button>
            </fieldset>
        </form>
    </div>

    <?php include './View/includes/js_config.php' ?>
</body>

</html>