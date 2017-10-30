<?php 
include 'config.php';
$consulta=$pdo->prepare("SELECT * FROM usuarios");
$consulta->execute();
if ($consulta->rowCount() >= 1) {
	while ($dados=$consulta->fetch()) {
		echo "
		<table border=1px cellpading=5px cellspacing=0px>
		<th>
		<tr><td>"."Nome: ".$dados['nome']."</td></tr>
		<tr><td>"."Username: ".$dados['username']."</td></tr>
		<tr><td>"."Email: ".$dados['email']."</td></tr>
		<tr><td>"."Senha: ".$dados['senha']."</td></tr>
		</th>
		</table>
		";
	}
}
?>
<a href="form.html">Novo Cadastro</a>
<a href="">Login</a>