<?php 
try{
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=cry;charset=utf8","root","main");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
}catch(PdoException $e){
	echo $e->getMessage();
}
?>