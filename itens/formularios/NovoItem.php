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
	<title>Cadastrar Itens</title>
</head>
	<body>
		<div id="dominio">Cadastrar Itens</div>
		<div id="logo_usuario"><a href="../inicio.php"><img src="../../imagens/logo.png"></a></div>
		<div id="corpo">
			<form method="post" action="../validacoes/validar_NovoCadastro_item.php">

				<input type="number" required min="0" name="codigo" maxlength="20" placeholder="Código"></td>
				<br>
				<br>
				<input type="text" name="tipo" maxlength="45" placeholder="Tipo">
				<br>
				<br>
				<textarea name="descricao" maxlength="150" placeholder="Descrição" style="height:8.5%;" required></textarea>
				<br>
				<br>
				<br>
				<br>
				<input type="number" min="0" step="any" name="valor" placeholder="Valor em Reais">
				<br>
				<br>
				<textarea name="conteudo" maxlength="150" placeholder="Conteudo" style="height:8.5%;"></textarea>
				<br>
				<br>
				<br>
				<br>
				<textarea name="obs" maxlength="150" placeholder="Observações" style="height:8.5%;"></textarea>
				<br>
				<br>
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
		<div id="sair"> <a href="../sair.php">Sair</a></div> 
		<div id="voltar"> <a href="javascript:history.back()">Voltar</a></div>
	</body>
</html>

