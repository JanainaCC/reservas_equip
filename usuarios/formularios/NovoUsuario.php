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
		<div id="dominio">Cadastrar Usuários</div>
		<div id="logo_usuario"><a href="../inicio.php"><img src="../../imagens/logo.png"></a></div>
		<div id="corpo">
			<form method="post" action="../validacoes/validar_NovoCadastro.php">
				<input type="text" name="nome" placeholder="Nome" required>
				<br> 
				<br> 
				<input type="text" name="usuario" maxlength="15" placeholder="Usuário" required>
				<br>
				<br> 
				<input type="password" name="senha" maxlength="20" placeholder="Senha" required>
				<br>
				<br> 
				<select id="nivel" name="nivel" required>
					<option value="">Selecione Nivel:</option>
					<option value="1">Usuário</option>
					<option value="2">Administrador</option>
				</select>	
				<br>
				<br>
				<br>	
				<input type="submit" value="cadastrar" >
				<br>
				<br>
				<input type="reset" value="limpar">
						
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
