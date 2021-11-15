<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Área Restrita </title>
        <!-- Fonte -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <!-- Estilos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include_once('../controle.php'); ?>

    <header>
        <div class="container" id="nav-container">
        <!-- add essa class -->

        <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
            <h4 class="text-white">Collapsed content</h4>
            <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark">-->
        <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <a class="navbar-brand" href="index.php">
            WhiteBeard
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Cadastrar produto</a>
            <a class="nav-item nav-link" href="#">Cadastrar cliente </a>
            <a class="nav-item nav-link" href="#">Cadastrar serviço</a>
            <a class="nav-item nav-link" href="#">Fazer agendamento</a> 
            <a class="nav-item nav-link" href="produtos.php">Produtos</a>
            <a class="nav-item nav-link" href="../destroi-sessao.php">Sair</a>
            </div>
        </nav>
        </div>
    </header>
        <div>
            <img src="img/fundo3.jpg" width="100%">
            <h1><center> Olá Administrador </center></h1>
        </div>
        
    </body>
</html>