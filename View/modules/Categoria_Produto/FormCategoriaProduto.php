<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'View/includes/css_config.php'?>
    <title>Document</title>
    <style>
        form{padding: 10px;}
    </style>
</head>

<body>
    <header>
        <?php include 'View/includes/cabecalho.php'?>
    </header>
    <div class="container">
        <form class="form" action="/categoria_produto/save" method="post">
            <legend>Cadastro de Categoria de Produtos</legend>
            <div class="form-group mb-3">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" aria-describedby="emailHelp" placeholder="Digitar Descrição">
            </div>        
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <footer>
        <?php include 'View/includes/footer.php'?>
    </footer>
    
    <?php include 'View/includes/js_config.php'?>
</body>

</html>