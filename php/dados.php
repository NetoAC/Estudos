<?php  
include 'config.php';
//SQL
$consulta=$pdo->prepare("SELECT * FROM usuarios");
$consulta->execute();

if ($consulta->rowCount()>=1) {
	while ($dados=$consulta->fetch()) {
	echo "<table border=1>
			<tr>
				<td align=center>".$dados['id']."</td>
				<td>".$dados['nome']."</td>
				<td>".$dados['username']."</td>
				<td>".$dados['email']."</td>
			</tr>
		</table>";
	}
}
?>
<a href="form.html">Novo cadastro</a>
<style>
	td{
		column-span: 23px;
	}
</style>