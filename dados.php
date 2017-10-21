<?php 
include 'config.php';

$consulta=$pdo->prepare("SELECT * FROM usuarios");

$consulta->execute();
if ($consulta->rowCount()>=1) {
	while ($dados=$consulta->fetch()) {
		echo 
		"
		<div id=tl>
			<thead></thead>
			<table border=1px cellpading=5px cellspacing=0px>
				<th>
					<tr><td>"."Nome: ".$dados['nome']."</td></tr>
					<tr><td>"."Username: ".$dados['username']."</td></tr>
					<tr><td>"."Email: ".$dados['email']."</td></tr>
					<tr><td>"."Senha: ".$dados['senha']."</td></tr>
				</th>
			</table>
		</div>

		";
	}
}
?>
<a href="form.html">Cadastro</a>
<style>
table{
	border-collapse: collapse;
	width: 50%;
}

tr, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
tr:hover{background-color:#f5f5f5}

#tl{
	margin-left: 27.3%;
}
a{
	font-size:30px;
	margin-left: 280px;
}
</style>