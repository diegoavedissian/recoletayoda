<?php
  session_start();
  require_once('./backend/connection.php');

  if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: login.php');
    exit();
  }

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $senha = mysqli_real_escape_string($conn, $_POST['senha']);
  $query = "SELECT * FROM tbl_cadastro WHERE email='{$email}' AND senha=md5('{$senha}')";
  $resultado = mysqli_query($conn, $query);
  $linha = mysqli_num_rows($resultado);
  if($linha == 1){
    $_SESSION['email'] = $email;
    header('Location: jogos.php');
    exit();
  } else {
    $_SESSION['naologado'] = true;
    header('Location: login.php');
    exit();
  }
