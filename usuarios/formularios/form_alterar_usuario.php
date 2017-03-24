<?php
include "../../Verificasessao.php";
include "../../Verificasessao.php";
if (!isset($_SESSION)) {
	session_start();
}
date_default_timezone_set('America/Fortaleza');
$date = date('d-m-Y');
if (!empty($_POST['alterarAtivo'])) {
	$_SESSION['$linha_alterar'] = $_POST['alterarAtivo'];
	$linha = $_SESSION['$linha_alterar'];
	$alterar=$_SESSION['$usuariosAtivos'];
	$_SESSION['login_alterar']=$_SESSION['$usuariosAtivos'][$linha][1];
}
if (!empty($_POST['alterarbuscaAtivo'])) {
	$_SESSION['$linha_alterar'] = $_POST['alterarbuscaAtivo'];
	$linha = $_SESSION['$linha_alterar'];
	$alterar=$_SESSION['$buscausuariosAtivos'];
	$_SESSION['login_alterar']=$_SESSION['$buscausuariosAtivos'][$linha][1];
}
if (!empty($_POST['alterarInativo'])) {
	$_SESSION['$linha_alterar'] = $_POST['alterarInativo'];
	$linha = $_SESSION['$linha_alterar'];
	$alterar=$_SESSION['$usuariosInativos'];
	$_SESSION['login_alterar']=$_SESSION['$usuariosInativos'][$linha][1];
}
if (!empty($_POST['alterarbuscaInativo'])) {
	$_SESSION['$linha_alterar'] = $_POST['alterarbuscaInativo'];
	$linha = $_SESSION['$linha_alterar'];
	$alterar=$_SESSION['$buscausuariosInativos'];
	$_SESSION['login_alterar']=$_SESSION['$buscausuariosInativos'][$linha][1];
}
?>

 <?php
include "../../Verificasessao.php";
if (!isset($_SESSION)) {
	session_start();
}
date_default_timezone_set('America/Fortaleza');
$date = date('d/m/Y');
$hora = date('H:i');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<title>formulário</title>
</head>
	<body>
		<div id="dominio">Alterar Usuário</div>
		<div id="logo_usuario"><a href="../inicio.php"><img src="../../imagens/logo.png"></a></div>
		<div id="corpo">
			<form method="post" action="../validacoes/validar_alteracao_usuario.php">
				Nome:
				<br>
				<input type="text" name="nome" value=<?php echo $alterar[$linha][0]; ?> required>
				<br>
				<br>
				Usuário:
				<br>
				<input type="text" name="login" value=<?php echo $alterar[$linha][1]; ?> readonly="readonly">
				<br>
				<br>
				Data Cadastro:
				<br>
				<input type="text" name="data" value=<?php echo $alterar[$linha][2]; ?> readonly="readonly">
				<br>
				<br>
				Usuário que cadastrou:
				<br>
				<input type="text" name="nivel" value=<?php echo $alterar[$linha][3]; ?> readonly="readonly">
				<br>
				<br>
				Nivel Usuario:
				<br>
				<input type="text" name="nivel" value=<?php echo $alterar[$linha][4]; ?> readonly="readonly">
				<br>
				<br>
				Nova Senha:
				<br>
				Sim<input type="radio" name="alterar_senha" value="1" required> Não<input type="radio" name="alterar_senha" value="0" required>
				<br>
				<input type="password" name="nova_senha">
				<br>
				<br>
				<br>
				<input type="submit" value="ALTERAR">
			</form>
		</div>	

		<div id="usuario_rodape">Usuário:</div>
		<div id="usuario"> <?php echo $_SESSION['nome_usuario'] ?> </div>
		<div id="hora"> <?php echo $hora; ?></div> 
		<div id="data"> <?php echo $date; ?></div>
		<div id="sair"> <a href="../../sair.php">Sair</a></div> 
		<div id="voltar"> <a href="javascript: history.back()">Voltar</a></div>
	</body>
</html>
