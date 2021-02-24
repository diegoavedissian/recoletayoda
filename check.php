<?php
session_start();
if(!$_SESSION['email']){
    echo "<script>
            alert('Para jogar faça o login!');
            location.href='login.php'
        </script>";
    exit();
}
