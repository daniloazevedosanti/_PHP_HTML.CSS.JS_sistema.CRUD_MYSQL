<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php
include "conexaoBD.php";
include "index.php";
$grava_nome = $_POST['nome'];
$grava_email = $_POST['email'];
$grava_msg = $_POST['msg'];
//###################################################
if($_GET['funcao'] == "gravar"){
	$sql_gravar = mysqli_query($db, "insert into tb_curso (nome, email, mensagem) value ('$grava_nome','$grava_email','$grava_msg')");
	header('Location:index.php');
}

//*******************************************************************

if($_GET['funcao'] == "editar"){
	$id = $_GET['id'];
	mysqli_query($db, "update tb_curso set nome='$grava_nome', email='$grava_email', mensagem='$grava_msg' where id = '$id'");
	header('Location:index.php');
}

//*******************************************************************

if($_GET['funcao'] == "excluir"){
	$id = $_GET['id'];
	mysqli_query($db, "delete from tb_curso where id = '$id'");
	header('Location:index.php');
}
