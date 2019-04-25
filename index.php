<!DOCTYPE html>
<html lang="pt-BR">
<head>
</head>
<body>
	<?php
	if(isset($_GET['funcao']) != "editar"){
	?>
	<form id="form1" method="post" action="funcoes.php?funcao=gravar">
		<table>
			<tr>
				<td>Nome:</td>
				<td><label>
					<input name="nome" type="text" id="nome" size="40" />
				</label></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><label>
					<input name="email" type="text" id="email" size="40" />
				</label></td>
			</tr>
			<tr>
				<td>Mensagem:</td>
				<td><label>
					<textarea name="msg" type="textarea" id="msg" cols="42" rows="4"></textarea>
				</label></td>
			</tr>
			<td></td>
			</tr>
		</table>
		<br>
		<label>
			<input name="sub" type="submit" id="sub" value="Cadastrar"/>
		</label>
	</form>
	<?php
	}
	?>

<?php
include 'conexaoBD.php';
	if(isset($_GET['funcao']) == "editar"){
	$id = $_GET['id'];	
	$sql_update = mysqli_query($db, "select * from tb_curso where id = '$id'");
	while($linha = mysqli_fetch_array($sql_update)){
				$nome = $linha['nome'];
				$email = $linha['email'];
				$msg = $linha['mensagem'];
			}
?>
<form id="form2" method="post" action="funcoes.php?funcao=editar&id=<?php echo $id?>">
		<table>
			<tr>
				<td>Nome:</td>
				<td><label>
					<input name="nome" type="text" id="nome" size="40" value="<?php echo $nome ?>" />
				</label></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><label>
					<input name="email" type="text" id="email" size="40" value="<?php echo $email ?>"/>
				</label></td>
			</tr>
			<tr>
				<td>Mensagem:</td>
				<td><label>
					<textarea name="msg" type="textarea" id="msg" cols="40" rows="4"><?php echo htmlspecialchars($msg) ?></textarea>
				</label></td>
			</tr>
			 <br>
			<tr>
			</tr>
		</table>
		<br>
		<label>
			<input name="sub" id="sub" type="submit" class="btn btn-default" value="Atualizar"/>
		 	| <a href="index.php" class="btn btn-default"><button>Cancelar</button></a>
		</label></td>
	</form>
<?php
}
?>
	<br />
	<table width="750" border="0" cellpadding="3" cellspacing="3">
		<tr>
			<td width="600" align="center" bgcolor="#CCCCCC"><span class="style9"><b>Nome</b></span></td>
			<td width="60" align="center" bgcolor="#CCCCCC"><span class="style9"><b>Editar</b></span></td>
			<td width="80" align="center" bgcolor="#CCCCCC"><span class="style9"><b>Remover</b></span></td>
		</tr>
		
		<?php
		include "conexaoBD.php";
		
			$sql_listar = mysqli_query($db, "select * from tb_curso order by nome");
			while($linha = mysqli_fetch_array($sql_listar)){
				$nome = $linha['nome'];
				$id = $linha['id'];
		?>	
		
		<tr>
			<td><?php echo $nome ?></td>
			<td align="center"><a href="index.php?funcao=editar&id=<?php echo $id ?>">Editar</a></td>
			<td align="center"><a href="funcoes.php?funcao=excluir&id=<?php echo $id ?>">Remover</a></td>
		</tr>
		<?php
			}
		?>
	</table>

</body>
</html>
