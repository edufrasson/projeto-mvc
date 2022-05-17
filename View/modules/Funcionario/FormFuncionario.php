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
    <form class="form"action="/funcionario/save" method="post">
        <fieldset>
            <legend>Cadastro de Funcionarios</legend>
            <br>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <br>
            <label for="cpf">CPF:</label>
            <input type="number" name="cpf" id="cpf">

            <br>
            <label for="data_nascimento">Data Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento">

            <br>

            <button type="submit">Enviar</button>
        </fieldset>
    </form>
    <?php include './View/includes/js_config.php' ?>
</body>

</html>