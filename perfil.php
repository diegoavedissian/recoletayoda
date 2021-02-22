<?php
session_start();
require_once('check.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <link rel="stylesheet" href="css/components/cadastro.css">
    <link rel="stylesheet" href="css/components/buttons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Editar Usuarios</title>
</head>

<body>
    <?php
    require_once('menu.html');
    require_once('modal.html');
    require_once('./backend/connection.php');
    ?>

    <br><br><br><br><br>
          
    <main class="container">
    <h1>Editar Perfil</h1>

        <div class="card my-4">
            <ul class="list-group list-group-flush">
                <input type="hidden" class="list-group-item" value="<?php echo $_SESSION['id_usuario'];?>" /> 
                <input class="list-group-item" id="nome" name="nome" value="<?php echo $_SESSION['nome'];?> " /> 
                <input class="list-group-item" id="email" name="email" value="<?php echo $_SESSION['email'];?> "/> 
                <input class="list-group-item" id="telefone" name="telefone" value="<?php echo $_SESSION['telefone'];?>"/>  
                <a href="./backend/update.php" class="btn btn-primary p-1 my-1 border-none">Alterar</a>
                <a href="./backend/delete.php" class="btn btn-primary p-1 my-1 border-none">Deletar</a>
                <a href="logout.php" class="btn btn-primary p-1 my-1 border-none">Sair</a>
            </ul>
        </div>

    </main>

    <?php
    require_once('footer.html');
    ?>

</body>

</html>


  

  