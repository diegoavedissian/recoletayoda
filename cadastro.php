<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="css/components/cadastro.css">
    <link rel="stylesheet" href="css/components/buttons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <style>
        a{
            font-size: 15px;
            color: red;
            text-decoration: none;
        }
    </style>
    <title>Cadastro | Recoleta</title>
</head>

<body>

    <?php
    require_once('menu.html');
    require_once('modal.php');
    require_once('./backend/connection.php');
    ?>

    <br><br><br>
    <div class="container my-4">
        <form method="POST" class="container box">
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="nome" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="phone" name="telefone" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="senha" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirme sua senha</label>
                <input type="password" class="form-control" id="password" name="senha2" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Aceitar Termos e condições</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn cancel" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn button-send">Enviar</button>
            </div>
            <a id="a" href="login.php">Ja possui cadastro? Faça o login clicando aqui!</a>
        </form>
    </div>

    <?php

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['senha']) && isset($_POST['senha2'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        if($senha != $senha2){
            echo"<script>alert('Senha não confere!!')</script>";
        } elseif(strlen($senha) < 6){
            echo"<script>alert('Senha deve conter no mínimo 6 caracteres!')</script>";
        } else {
            $checkrepeticao = "SELECT email from tbl_cadastro WHERE email='$email'";
            $emails = mysqli_query($conn, $checkrepeticao);
            $repetido = mysqli_num_rows($emails);

            if ($repetido == 1) {
                echo "<script>alert('email ja cadastrado!')</script>";
            } else {
                $sql = "INSERT INTO tbl_cadastro (nome_usuario, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', md5('$senha'))";
                $result = $conn->query($sql);

                if ($result) {
                    echo "<script>alert('Cadastrado com sucesso!');location.href='login.php'</script>";
                } else {
                    echo "<script>alert('ERRO!! Dados não inseridos!')</script>";
                    exit();
                }
            }
        }            
    }
    ?>

    <br><br><br>

    <?php
    require_once('footer.html');
    ?>

</body>

</html>