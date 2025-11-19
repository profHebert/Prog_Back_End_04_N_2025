<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 
include "aula10_menu.php";

// Removendo o dado 'usuario'
unset($_SESSION['usuario']);

// Verificando se foi removido
if (!isset($_SESSION['usuario'])) {
    echo 'O usuário foi removido da sessão.';
}
?>

<h2>10_03</h2>