<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 
if(count($_SESSION)==0){
    echo "<h2>Sessão sem dados atribuidos!</h2>";
    echo '<a href="aula10_01.php">aula10_01</a>';
    exit;
}
?>
<br>
<a href="aula10_01.php">aula10_01</a> | 
<a href="aula10_02.php">aula10_02</a> | 
<a href="aula10_03.php">aula10_03</a> |
<a href="aula10_destroi.php">aula10_destroi</a> |
<br>
