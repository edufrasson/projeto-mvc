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
            <legend>Cadastro d e Produtos</legend>
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao">
            
            <br>

            <label for="Preço">Preço: </label>
            <input type="number" name="Preço" id="Preço">

            <br>

            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>