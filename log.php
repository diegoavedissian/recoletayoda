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
    while ($row = mysqli_fetch_assoc($resultado)) {
      $_SESSION['id_usuario'] = $row['id_usuario'];
      $_SESSION['nome'] = $row['nome_usuario'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['telefone'] = $row['telefone'];
      $_SESSION['senha'] = $row['senha'];
  }
    header('Location: jogos.php');
  } else {
    $_SESSION['naologado'] = true;
    echo"<script>alert('Login inválido!'); location.href='login.php'</script>";    
    exit();
  }
