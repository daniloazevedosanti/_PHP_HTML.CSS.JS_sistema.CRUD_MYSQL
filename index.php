<html>
<head>
</head>
<body>
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
					<textarea name="msg" type="textarea" id="msg" cols="40" rows="4"> </textarea>
				</label></td>
			</tr>
			<td><label>
				<input name="sub" type="submit" id="sub" value="Cadastrar"  />
				</label></td>
			</tr>
		</table>
	</form>

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
				$pnome = $linha['nome'];
				$pid = $linha['id'];
		?>	
		
		<tr>
			<td><?php echo $pnome ?></td>
			<td align="center"><a href="funcoes.phpfuncao=editar&id=<?php echo $pid ?>">Editar</a></td>
			<td align="center"><a href="funcoes.phpfuncao=remove&id=<?php echo $pid ?>">Remover</a></td>
		</tr>
		<?php
			}
		?>
	</table>

</body>
</html>