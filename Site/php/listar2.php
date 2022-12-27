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
<meta charset="utf-8"/>
<Title>Cadastro</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/Style23.css"/>
</head>
<body>
<center>
<h3>Listagem de cadastros</h3>
<p></p>
<p></p>
<?php 
include "conexao.php";
$query = mysqli_query($sql,"SELECT * FROM usuarios");
?>
<table border="1">
<tr>
<td align="center">id</td>
<td align="center">Nome</td>
<td align="center">Email</td>
<td align="center">Usuario</td>
<td align="center">Senha</td>
<td align="center" colspan="2">Ação</td>
</tr>
<?php 
while($row = mysqli_fetch_array($query)){
	$id = $row['id'];
	$nome = $row['nome'];
	$email = $row['email'];
	$usuario = $row['usuario'];
	echo"
	<tr>
	<td>$id</td>
	<td>$nome</td>
	<td>$email</td>
	<td>$usuario</td>
	<td><a href=\"editar2.php?id=$id\">[Editar]</a></td>
	<td><a href=\"excluir.php?id=$id\">[Excluir]</a></td>
	</tr>";	
}
?>


</table>






</body>
</html>