<?php 
include 'config.php';

$nome = $_POST['nome'];
$username = $_POST['username'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$consulta=$pdo->prepare("INSERT INTO usuarios(nome,username,email,senha)
	VALUES(?,?,?,?)");

$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$username);
$consulta->bindParam(3,$email);
$consulta->bindParam(4,$senha);
$consulta->execute();
?>
<a href="form.html">Novo Cadastro</a>
<a href="dados.php">Ver dados</a>