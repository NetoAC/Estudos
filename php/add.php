<?php 
include 'config.php';
$nome = $_POST['nome'];
$username = $_POST['username'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$adicionar=$pdo->prepare("INSERT INTO usuarios(nome,username,email,senha) VALUES(?,?,?,?)");
$adicionar->bindParam(1,$nome);
$adicionar->bindParam(2,$username);
$adicionar->bindParam(3,$email);
$adicionar->bindParam(4,$senha);
$adicionar->execute();
?>
<a href="form.html">Voltar</a>
<a href="select.php">Ver dados Cadastrados</a>