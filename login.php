<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/components/login.css">
  <link rel="stylesheet" href="css/components/buttons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <style>
    a{
      font-size: 15px;
      color: red;
      text-decoration: none;
    }
  </style>
  <title>Login | Recoleta</title>
</head>

<body>

  <?php
  require_once('menu.html');
  require_once('modal.html');
  ?>
  <br><br><br><br>
  <div class="row">
    <form method="POST" action="log.php" class="container box">

      <?php
      if(isset($_SESSION['naologado'])):
      ?>
        <div class="alert alert-danger" role="alert">
          Erro: Usuario ou senha invalidos!
        </div>
      <?php
      endif;
      unset($_SESSION['naologado']);
      ?>
  
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" name="senha" id="senha">
      </div>
      <button type="submit" class="btn cancel my-3">Entrar</button>
      <a href="cadastro.php" class="col-sm-6 col-md-4 col-lg-3">Ainda não tem cadastro? Clique aqui!</a>
    </form>
  </div>

  <br><br><br>
  <?php
  require_once('footer.html');
  ?>

</body>

</html>
