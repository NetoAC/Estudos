<?php require_once 'dao/crudDao.php';
 $data = crudDao::viewAllData(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		table,td{
			border: 1px solid;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>Nome</td>
			<td>Username</td>
			<td>Email</td>
			<td>Login</td>
			<td>Senha</td>
		</tr>
		<?php foreach ($data as $value) :?>
		<tr>
			<td><?= $value['nome']?></td>
			<td><?= $value['username']?></td>
			<td><?= $value['email']?></td>
			<td><?= $value['login']?></td>
			<td><?= $value['senha']?></td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>