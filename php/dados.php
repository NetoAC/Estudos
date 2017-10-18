<?php 
include 'config.php';
$result=$pdo->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<a href="form.php">Novo Cadastro</a>
	<table border="1">
		<tr>
			<td>Nome</td>
			<td>Username</td>
			<td>Email</td>
			<td>Senha</td>
			<td>Ações</td>
		</tr>
		<?php 
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<tr>";
			echo "<td>".$row['nome']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['senha']."</td>";
			echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>