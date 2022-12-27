<?php
session_start();
ob_start();
//Verifica se botao cadastrar foi selecionado
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";
	}elseif(stristr($dados['senha'], "'")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( ' ) utilizado na senha é inválido";
	}else{
		$result_usuario = "SELECT id FROM usuarios WHERE usuario='". $dados['usuario'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este usuário já está sendo utilizado";
		}
		
		$result_usuario = "SELECT id FROM usuarios WHERE email='". $dados['email'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}
	
	
	//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		
		$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
						'" .$dados['nome']. "',
						'" .$dados['email']. "',
						'" .$dados['usuario']. "',
						'" .$dados['senha']. "'
						)";
		$resultado_usario = mysqli_query($sql, $result_usuario);
		if(mysqli_insert_id($sql)){
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			header("Location: entrar.php");
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
		}
	}
	
}
?>
<html lang="t-br">
<head>
<meta charset="UTF-8"/>
<title>
Cadastro
</title>
<link rel="stylesheet" type="text/css" href="../css/Style3.css"/>	
</head>
<body id="b4">
<div class="loginbox">
<img src="../images/avatar.png" class="avatar">
<h1>Login Here</h1>
<center>

<form method="POST" action="">
					<label>Digite seu nome</label>
					<input type="text" name="nome"class="form-control"><br>
					<br>
					<label>Digite seu email</label>
					<input type="text" name="email" class="form-control"><br>
					<br>
					<label>Digite o usuario</label>
					<input type="text" name="usuario" class="form-control"><br>
					<br>
					<label>Digite a senha</label>
					<input type="password" name="senha" class="form-control"><br>
					<br>
					<input type="submit" name="btnCadUsuario" value="Cadastrar" class="button" /><br><br>
					</form>
			</div>
		</div>
		
	</body>
</html>