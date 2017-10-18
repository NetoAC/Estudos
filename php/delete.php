<?php 
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(array(':id'=>$id));
?>