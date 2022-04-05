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
    <form action="/categoria_produto/save" method="post">
        <fieldset>
            <legend>Cadastro de Categoria de Produtos</legend>
            <label for="descricao">Descrição: </label><br>
            <input type="text" name="descricao" id="descricao"><br>

            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>