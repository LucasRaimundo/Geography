<?php 
session_start();
if(!empty($_SESSION['id'])){

}else{
	$_SESSION['msg'] = "<font color:'#fff'>Área restrita</font>";
	header("Location: entrar.php");
}
?>
<!doctype html>
<html lang="t-br">
<head>
<meta charset="UTF-8"/>
<title>
Editar Cadastro
</title>
<link rel="stylesheet" type="text/css" href="../css/Style3.css"/>	
</head>
<body id="b4">
<?php 
include "conexao.php";
$id =$_GET["id"];
$query = mysqli_query($sql, "select * from usuarios where id = $id");
$row = mysqli_fetch_array($query);

?>
<div class="loginbox">
<img src="../images/avatar.png" class="avatar">
<h1>Login Here</h1>
<center>

<form method="POST" action="salvar_alteracao">
					<input type="hidden" name="id" value="<?php echo $row['id'];?>">
					<label>Digite seu nome</label>
					<input type="text" name="nome"class="form-control" value="<?php echo $row['nome'];?>"><br>
					<br>
					<label>Digite seu email</label>
					<input type="text" name="email" class="form-control" value="<?php echo $row['email'];?>"><br>
					<br>
					<label>Digite o usuario</label>
					<input type="text" name="usuario" class="form-control" value="<?php echo $row['usuario'];?>"><br>
					<br>
					<br>
					<input type="submit" name="Salvar" value="Salvar" class="button" /><br><br>
					</form>
			</div>
		</div>
		
	</body>
</html>

