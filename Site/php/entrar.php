<?php
session_start();
?>
<!doctype html>
<html lang="t-br">
<head>
<meta charset="UTF-8"/>
<title>
Cadastro
</title>
<link rel="stylesheet" type="text/css" href="../css/Style2.css"/>	
</head>
<body id="b3">
<div class="loginbox">
<img src="../images/avatar.png" class="avatar">
<h1>Login Here</h1>
<center>


<form type="text" name="form" method="post" action="valida.php">

				<br>
<label>Usuarname</label><br>
<input type="text" name="usuario" id="tab1"><br><br>
<label>Password</label><br>
<input type="password" name="senha" id="tab2"><br><br>



<input type="submit" value="Entrar"  name="acessar" id="botao"/><br><br>
<input type="reset" id="botao" value="Limpar Campos" id="botao" /><br> <br>
<input name="" type="button" onClick="window.open('../Index.html')" value="Voltar" id="botao">
</center>
</div>


</body>
</html>