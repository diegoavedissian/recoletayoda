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
    $_SESSION['id_usuario'] = $id_usuario;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;    
    $_SESSION['telefone'] = $telefone;
    $_SESSION['senha'] = $senha;
    header('Location: jogos.php');
    exit();
  } else {
    $_SESSION['naologado'] = true;
    echo"<script>alert('Login inválido!'); location.href='login.php'</script>";    
    exit();
  }