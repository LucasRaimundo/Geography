<?php
session_start();
include_once("conexao.php");
$acessar = filter_input(INPUT_POST, 'acessar', FILTER_SANITIZE_STRING);
if($acessar){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: prova.php");
			}else{
				$_SESSION['msg'] = "<texto>Login e senha incorreto!</texto>";
				header("Location: entrar.php");
			}
		}
	}else{
		$_SESSION['msg'] = "<texto>Login e senha incorreto!</texto>";
		header("Location: entrar.php");
	}
}else{
	$_SESSION['msg'] = "<texto>Página não encontrada</texto>";
	header("Location: entrar.php");
}
