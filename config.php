<?php
try{
	$pdo = new PDO("mysql:host=localhost;dbname=new","root","");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
}catch(PDOException $e){
	echo $e->getMessage();
}
?>