<?php session_start(); ?>
<h1>Bem Vindo, <?php echo $_SESSION['username']; ?></h1>
<a href="sair.php">Sair</a>