<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 

include "aula10_menu.php";

$usuario=$_SESSION['usuario'];
$email=$_SESSION['email'];
echo "Usuario: $usuario<br>";
echo "E-mail: $email<br>";
?>
<h2>10_02</h2>