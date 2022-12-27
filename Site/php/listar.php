<?php
session_start();
if(empty($_SESSION['id'])){

	$_SESSION['msg'] = "<font color:'#fff'>Área restrita</font>";
	header("Location: entrar.php");	
}
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<title>
Geografia
</title>
<link rel="stylesheet" href="../css/Style23.css" type="text/css">
</head>
<BODY>
<center>
<h3>Respostas</h3>

<?php 
include "conexao.php";
$query = mysqli_query($sql, "select * from prova");
?>


<table border="2">

<tr>
<td align="center">Nome</td>
<td align="center">Data</td>
<td align="center">Nota</td>
<td align="center" colspan="2">Ação</td>
</tr>
<?php 
while($row = mysqli_fetch_array($query)){
	$id = $row['id'];
	$nome = $row['nome'];
	$data = $row['data'];
	$nota = $row['nota'];
	echo"
	<tr>
	<td>$nome</td>
	<td>$data</td>
	<td>$nota</td>
	<td><a href=\"excluir.php?id=$id\">[Excluir]</a></td>
	</tr>";	
}
?>
<ul>
<li><?php if(!empty($_SESSION['id'])){echo "<a href='sair.php'>Sair</a>";}?></li> <br> <br> <br>
</ul>

</table>

</body>
</html>