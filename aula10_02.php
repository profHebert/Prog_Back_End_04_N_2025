<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 

echo "Usuario: $usuario<br>";
echo "E-mail: $email<br>";
?>
<h2>10_02</h2>