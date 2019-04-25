<?php
include "conexaoBD.php";
include "form.php";
$grava_nome = $_POST['nome'];
$grava_email = $_POST['email'];
$grava_msg = $_POST['msg'];

	if($_GET['funcao'] == "gravar")
	{
	$sql_gravar= mysqli_query($db, "insert into tb_curso(nome, email, mensagem) values('$grava_nome', '$grava_email', '$grava_msg')");
	header('Location:form.php');
	}
