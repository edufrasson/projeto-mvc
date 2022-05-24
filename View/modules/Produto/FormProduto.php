<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './View/includes/css_config.php' ?>
    <style>
        input,
        label {
            display: block
        }
    </style>
</head>

<body>
    <header>
        <?php include 'View/includes/cabecalho.php' ?>
    </header>
    <div class="container">
        <form class="form" action="/produto/save" method="post">
            <fieldset class="form-group">
                <legend>Cadastro de Produtos</legend>
                <label for="descricao">Descrição: </label>
                <input class="form-control mb-3" type="text" name="descricao" id="descricao" value="<?= (isset($dados_produto)) ? $dados_produto->descricao : '' ?>">

                <br>

                <label for="preco">Preço: </label>
                <input class="form-control mb-3" type="number" name="preco" id="preco" step="1" min="0" value="<?= (isset($dados_produto)) ? $dados_produto->preco : '' ?>">

                <br>
                <select class="select" name="id_categoria">
                    <option value="">Selecione...</option>

                    <?php foreach ($categorias_arr as $categoria) : ?>
                        <option value="<?= $categoria->id ?>" <?= ($categoria->id == $dados_produto->id_categoria) ? "selected" : "" ?>>
                            <?= $categoria->descricao ?>
                        </option>
                    <?php endforeach ?>
                </select>

                <br><br>

                <button class="btn btn-primary" type="submit">Enviar</button>
            </fieldset>
        </form>
    </div>

    <?php include 'View/includes/js_config.php' ?>
</body>

</html>