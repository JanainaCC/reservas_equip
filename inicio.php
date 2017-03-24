<?php
include "conexao.php";
if (!isset($_SESSION)) {
	session_start();
}
if (!isset($_SESSION['nome_usuario'])) {
	header('location: index.php');
}else{
	date_default_timezone_set("America/Sao_Paulo");
	$date=date("d/m/Y");
	$hora=date("H:i");
	$nivel=$_SESSION['nivel_usuario'];
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Início</title>
	</head>
	<body>
		<div id="logo">
			<a href="inicio.php"><img src="imagens/logo.png"></a>
		</div>


		<div id="fundo_menu_inicial"></div>

		<?php 
		if($nivel>1){
		?>	
		<a href = 'usuarios/usuarios.php'>
			<div id="nomeusuario">Usuários</div>
		</a>

		<div id="divisor1">
			<img src="imagens/divisor.png">
		</div>
		<?php
		}
		?>
		
		<?php 
		if($nivel>1 ){
		?>
		<a href = 'itens/itens.php'> 
			<div id="nomeitens">Itens</div>
		</a>

		<div id="divisor2">
			<img src="imagens/divisor.png">
		</div>
		<?php
		}
		?>

		<?php 
		if($nivel>1){
		?>
		<a href= 'itens/todas_reservas.php'>
			<div id="nomereservas">Reservas</div> 
		</a>

		<div id="divisor3">
			<img src="imagens/divisor.png">
		</div>
		<?php
		}
		?>

		<?php 
		if($nivel>1 ){
		?>
		<a href= 'itens/minhas_reservas.php'>
			<div id="nomemyreservas">Minhas Reservas</div>
		</a>
		<?php
		}
		?>

		<?php 
		if($nivel==1){
		?>
		<a href= 'itens/minhas_reservas.php'>
			<div id="nomereservas">Minhas Reservas</div>
		</a>

		<div style="margin-left: -21%" id="divisor3">
			<img src="imagens/divisor.png">
		</div>
		<?php
		}
		?>

		<?php 
		if($nivel==1){
		?>
		<a href= 'itens/formularios/NovaReserva.php'>
			<div style="margin-left: 35%" id="nomeitens">Nova Reserva</div>
		</a>
		<?php
		}
		?>

		<div id="usuario_rodape">Usuário:</div>
		<div id="usuario"> <?php echo $_SESSION['nome_usuario'] ?> </div>
	    <div id="hora"> <?php echo $hora; ?></div> 
		<div id="data"> <?php echo $date; ?></div>
		<div id="sair" ><a href="sair.php"> Sair </a> </div>
	</body>
	</html>
	<?php
}
?>
