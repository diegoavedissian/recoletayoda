<?php
session_start();
require_once('connection.php');
$id_usuario = $_SESSION["id_usuario"];

$query = "DELETE FROM tbl_cadastro WHERE id_usuario = $id_usuario";
$apagar = mysqli_query($conn, $query);
if ($apagar) {
	session_destroy();
    echo "<script>
					alert('Cadastro excluido com Sucesso!');
					location.href='../index.php';
				 </script>";
} else {
    echo "<script>
					alert('Erro! Cadastro não excluído!!');
					location.href='../perfil.php';
				 </script>";
}
