<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input, label {display: block}
    </style>
</head>
<body>
    <form action="/pessoa/save" method="post">
        <fieldset>
            <legend>Cadastro de Pessoas</legend>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="cpf">CPF:</label>
            <input type="number" name="cpf" id="cpf">

            <label for="data_nascimento">Data Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento">

            <br>

            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>