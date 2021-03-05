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
    require_once('modal.php');
    require_once('./backend/connection.php');
    ?>
          
    <main class="container my-5 py-5">
        <h1>Editar Perfil</h1>
        <form method="POST" action="./backend/update.php">
            <div class="card my-4">
                <ul class="list-group list-group-flush">

                    <input type="hidden" class="list-group-item" value="<?php echo $_SESSION['id_usuario'];?>" /> 
                    <input class="list-group-item" id="nome" name="nome" value="<?php echo $_SESSION['nome'];?> " /> 
                    <input class="list-group-item" id="email" name="email" value="<?php echo $_SESSION['email'];?> "/> 
                    <input class="list-group-item" id="telefone" name="telefone" value="<?php echo $_SESSION['telefone'];?>"/>  
                    <input type="password" class="list-group-item" id="senha" name="senha" value="<?php echo $_SESSION['senha'];?>"/>
                    
                    <button class="btn btn-primary p-1 my-1 border-none">Alterar</button>
                    <a href="./backend/delete.php" class="btn btn-primary p-1 my-1 border-none">Deletar</a>
                    <a href="logout.php" class="btn btn-primary p-1 my-1 border-none">Sair</a>

                </ul>
            </div>
        </form>
    </main>

    <?php
    require_once('footer.html');
    ?>

</body>
</html>


  

  