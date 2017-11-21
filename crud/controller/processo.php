<?php 
require_once '../dao/crudDao.php';
$nome = $_POST['nome'];
$username = $_POST['username'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = sha1($_POST['senha']);

$insert=crudDao::insertData($nome,$username,$email,$login,$senha);
?>