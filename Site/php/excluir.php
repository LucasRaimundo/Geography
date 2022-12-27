<?php 
include "conexao.php";

$id =$_GET["id"];

mysqli_query($sql, "DELETE FROM prova where id = $id");
header("Location: listar.php");
?>