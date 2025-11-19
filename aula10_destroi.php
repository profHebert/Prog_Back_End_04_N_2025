
<?php
session_start();
include "aula10_menu.php";
// Destruindo a sessão
session_destroy();

// Limpando os dados da variável $_SESSION
$_SESSION = array();

echo 'Sessão destruída.';
?>

<h2>aula_destroi</h2>