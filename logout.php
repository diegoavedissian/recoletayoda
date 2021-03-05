<?php
session_start();
session_destroy();
header('Location: index.php');
echo "<script>alert('Logged out!')</script>";
exit();
