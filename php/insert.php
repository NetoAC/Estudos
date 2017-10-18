<?php 
include 'config.php';

$nome = $_POST['nome'];
$username = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios(nome,username,email,senha)VALUES(:nome,:username,:email,:senha)";

$query=$pdo->prepare($sql);

$query->bindparam(':nome',$nome);
$query->bindparam(':username',$username);
$query->bindparam(':email',$email);
$query->bindparam(':senha',$senha);
$query->execute();

echo "<a href=dados.php>Ver dados cadastrados</a>";
?>