<nav class="navbar navbar-expand-lg navbar-light bg-light mr-2 mb-3">
    <a class="navbar-brand" href="#">Projeto MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav justify-content-between row">          
            <li class="nav-item dropdown col">
                <a class="dropdown-toggle text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Pessoa
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/pessoa/form">Cadastrar Pessoa</a></li>
                    <li><a class="dropdown-item" href="/pessoa">Listar Pessoa</a></li>                   
                </ul>
            </li>      
             
            <li class="nav-item dropdown col">
                <a class="dropdown-toggle text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Produto
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/produto/form">Cadastrar produto</a></li>
                    <li><a class="dropdown-item" href="/produto">Listar produto</a></li>                        
                </ul>
            </li>

            <li class="nav-item dropdown col">
                <a class="dropdown-toggle text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Categoria de Produto
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/categoria_produto/form">Cadastrar categoria produto</a></li>
                    <li><a class="dropdown-item" href="/categoria_produto">Listar categoria produto</a></li>                        
                </ul>
            </li>

            <li class="nav-item dropdown col">
                <a class="dropdown-toggle text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Funcionário
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/funcionario/form">Cadastrar funcionario</a></li>
                    <li><a class="dropdown-item" href="/funcionario">Listar funcionario</a></li>                        
                </ul>
            </li>
        </ul>
    </div>
</nav> 