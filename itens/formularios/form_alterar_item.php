<?php

include "../../Verificasessao.php";
if (!isset($_SESSION)) {
	session_start();
}
date_default_timezone_set('America/Fortaleza');
$date = date('d/m/Y');
$hora = date('H:i');


if (!empty($_POST['alterarAtivo'])) {
	$_SESSION['$linha_alterar'] = $_POST['alterarAtivo'];
	$linha = $_SESSION['$linha_alterar'];
	$alterar=$_SESSION['$itensAtivos'];
	$_SESSION['codigo_alterar']=$_SESSION['$itensAtivos'][$linha][0];
}
if (!empty($_POST['alterarBuscaAtivo'])) {
	$_SESSION['$linha_alterar'] = $_POST['alterarBuscaAtivo'];
	$linha = $_SESSION['$linha_alterar'];
	$alterar=$_SESSION['$buscaitensAtivos'];
	$_SESSION['codigo_alterar']=$_SESSION['$buscaitensAtivos'][$linha][0];
}
if (!empty($_POST['alterarInativo'])) {
	$_SESSION['$linha_alterar'] = $_POST['alterarInativo'];
	$linha = $_SESSION['$linha_alterar'];
	$alterar=$_SESSION['$itensInativos'];
	$_SESSION['codigo_alterar']=$_SESSION['$itensInativos'][$linha][0];
}
if (!empty($_POST['alterarBuscaInativo'])) {
	$_SESSION['$linha_alterar'] = $_POST['alterarBuscaInativo'];
	$linha = $_SESSION['$linha_alterar'];
	$alterar=$_SESSION['$buscaitensInativos'];
	$_SESSION['codigo_alterar']=$_SESSION['$buscaitensInativos'][$linha][0];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<title>Alterar Item</title>
	</head>
	<body>
		<div id="dominio" style="margin-top: 1%; margin-left: 44%;">Alterar Item</div>
		<div id="logo_usuario"><a href="../inicio.php"><img src="../../imagens/logo.png"></a></div>
		<div id="corpo">

			<form method="post" action="../validacoes/validar_alteracao_item.php" style="margin-top:-6%;">

				Código:<br>
				<input type="number" min="0" name="codigo" value=<?php echo $alterar[$linha][0]; ?> readonly="readonly" >
				<br>
				<br>
				Tipo:<br>
				<input type="text" name="tipo" value=<?php echo $alterar[$linha][1]; ?> >
				<br>
				<br>
				Nível:<br>
				<input type="text" name="nivel" value=<?php echo $alterar[$linha][6]; ?> readonly="readonly">
				<br>
				<br>
				Descrição:<br>
				<textarea type="text" name="descricao" required="required"><?php echo $alterar[$linha][2]; ?></textarea>
				<br>
				<br>
				<br>
				Valor:<br>
				<input type="number" min="0" step="any" name="valor" value=<?php echo $alterar[$linha][3]; ?>>
				<br>
				<br>
				Conteúdo:<br>
				<textarea type="text" name="conteudo"><?php echo $alterar[$linha][4]; ?></textarea>
				<br>
				<br>
				<br>
				Observações:<br>
				<textarea type="text" name="obs"><?php echo $alterar[$linha][7]; ?></textarea><br>
				<br>
				<br>
				<br>
				<input type="submit" value="Alterar" >
				<br>
				<br>
				<input type="reset" value="limpar">
								
			</form>
		</div>	
		<div id="usuario_rodape">Usuário:</div>
			<div id="usuario"> <?php echo $_SESSION['nome_usuario'] ?> </div>
			<div id="hora"> <?php echo $hora; ?></div> 
			<div id="data"> <?php echo $date; ?></div>
			<div id="sair"> <a href="../sair.php">Sair</a></div> 
			<div id="voltar"> <a href="javascript:history.back()">Voltar</a></div>
	</body>
</html>