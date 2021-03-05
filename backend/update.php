<?php
    session_start();
    require_once('connection.php');

    $id_usuario = $_SESSION['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    
    $query="UPDATE tbl_cadastro SET nome_usuario='$nome', email='$email', telefone='$telefone', senha=md5('$senha') WHERE id_usuario = $id_usuario";
    $atualizar = mysqli_query($conn, $query);
    if($atualizar){
        session_destroy();
        session_start();
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['senha'] = $senha;
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
