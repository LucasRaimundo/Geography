
<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
	echo "<a href='/php/sair.php'>Sair</a>";
}else{
	$_SESSION['msg'] = "<font color:'#fff'>Área restrita</font>";
	header("Location: entrar.php");	

}
include "conexao.php";

$nome = $_SESSION['nome'];
$data = date('d/m/Y');
$q1 = $_POST ["q1"];
$q2 = $_POST ["q2"];
$q3 = $_POST ["q3"];
$q4 = $_POST ["q4"];
$q5 = $_POST ["q5"];
$q6 = $_POST ["q6"];
$q7 = $_POST ["q7"];
$q8 = $_POST ["q8"];
$q9 = $_POST ["q9"];
$q10 = $_POST ["q10"];

if ($q1 == "5"){
	$total = $total + 1;
}
if ($q2 == "3"){
	$total = $total + 1;
}
if ($q3 == "4"){
	$total = $total + 1;
}
if ($q4 == "1"){
	$total = $total + 1;
}
if ($q5 == "3"){
	$total = $total + 1;
}
if ($q6 == "4"){
	$total = $total + 1;
}
if ($q7 == "2"){
	$total = $total + 1;
}
if ($q8 == "4"){
	$total = $total + 1;
}
if ($q9 == "1"){
	$total = $total + 1;
}
if ($q10 == "3"){
	$total = $total + 1;
}

$sql->query("insert into prova(id, nome, data, nota) values(null, '$nome','$data','$total')");


header("Location: listar.php");

?>

</body>
</html>