<?php 
require_once 'config.php';
class crudDao
{
	
	public static function insertData($nome,$username,$email,$login,$senha)
	{
		global $pdo;

		try{

			$query="INSERT INTO usuarios(nome,username,email,login,senha) VALUES(?,?,?,?,?)";
			$stmt=$pdo->prepare($query);
			$stmt->bindParam(1,$nome);
			$stmt->bindParam(2,$username);
			$stmt->bindParam(3,$email);
			$stmt->bindParam(4,$login);
			$stmt->bindParam(5,$senha);
			$stmt->execute();
		}catch(PdoException $e){
			echo $e->getMessage();
		}
	}
	
	public static function viewAllData()
	{
		global $pdo;

		try{
			$query="SELECT * FROM usuarios";
			$stmt=$pdo->prepare($query);
			$stmt->execute();
			if ($stmt->rowCount() > 0) {
				$data = array();
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$data[] = $row;
				}
				return $data;
			}
		}catch(PdoException $e){
			echo $e->getMessage();
		}
	}
}
?>