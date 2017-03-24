<?php
include "../../Verificasessao.php";
include "../../conexao.php";
if (!isset($_SESSION)) {
	session_start();
}
date_default_timezone_set('America/Fortaleza');
$date = date('d/m/Y');
$hora = date('H:i');

$cod_reserva = $_REQUEST['codigo'];

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<title>Entrega de Equipamento</title>
	</head>
	<body>
		<div id="dominio" style="margin-top: 1%; margin-left: 39.5%;">Entrega de Equipamento</div>
		<div id="logo_usuario"><a href="../inicio.php"><img src="../../imagens/logo.png"></a></div>
		<div id="corpo">

			<form method="POST" action="../validacoes/check_reserva.php" style="margin-top:-6%;">
				<br>
				Código da Reserva<br>
				<input type="text" name= 'codigo' readonly="readonly" value=<?php echo $cod_reserva ?>>
				<br>
				<br>
				Descrição Check<br>
				<textarea type="text" name="descricao" required="required"></textarea><br>
				<br>
				<br>
				<br>
				<input type="submit" value="Finalizar">
				<br>
				<br>
				<input type="reset" value="Limpar">
								
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