<?php
    session_start();
    require_once('connection.php');

    $id_usuario = $_SESSION['id_usuario'];
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $telefone = $_SESSION['telefone'];
    $senha = $_SESSION['senha'];
    
    $query="UPDATE tbl_cadastro SET nome_usuario='$nome', email='$email', telefone='$telefone', senha=md5('$senha') WHERE id_usuario = $id_usuario";
    $atualizar = mysqli_query($conn, $query);
    if($atualizar){
        echo "<script>
                alert('Cadastro alterado');
                location.href='../perfil.php';
            </script>";
    } else {
        echo "<script>
                alert('Erro! Cadastro não foi alterado!!');
                location.href='../perfil.php';
            </script>";
    }
