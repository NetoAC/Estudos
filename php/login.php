<?php 
include 'config.php';
$username = $_POST['username'];
$senha = md5($_POST['senha']);

$consulta=$pdo->prepare("SELECT * FROM usuarios WHERE username = ? and senha = ?");

$consulta->bindParam(1,$username);
$consulta->bindParam(2,$senha);
$consulta->execute();

if ($consulta->rowCount() >=1) {
	session_start();
	$fila = $consulta->fetch();
	$_SESSION['nome']= $fila['nome'];
	$_SESSION['username']= $fila['username'];
	header('location:page1.php');
}else{
	echo "tá errada a senha vey! ";
}
?>
<a href="form-login.php"> Sair</a>
