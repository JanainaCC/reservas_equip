<?php
include "../../Verificasessao.php";
include "../../conexao.php";
if (!isset($_SESSION)) {
	session_start();
}
date_default_timezone_set('America/Fortaleza');
$date = date('d-m-Y');
$hora =date('H:i');

$cod_item = $_REQUEST['codigo'];

	$sql = "SELECT data_inicio, hora_inicio, data_fim, hora_fim FROM t_reserva WHERE t_item_cod_item = '$cod_item' AND cancela_reserva = '0'";
	$result = mysqli_query($conexao, $sql);

	if(!$result){
		echo "<script type='text/javascript'>alert ('NÃO FOI POSSIVEL EFETUAR CONSULTA DAS RESERVAS!'); window.location.href='javascript:history.back()';</script>";
		mysqli_close($conexao);
	}else{
		$reservas = array(array("Data de Início", "Hora de Início", "Data de Fim", "Hora de Fim"));
		$i = 1;
		while (($linha = mysqli_fetch_array($result))==true) {
			$data_inicio=date('d-m-Y', strtotime($linha['data_inicio']));
			$hora_inicio=$linha['hora_inicio'];
			$data_fim=date('d-m-Y', strtotime($linha['data_fim']));
			$hora_fim=$linha['hora_fim'];

			do {
				
				$reservas[$i][0]=$data_inicio;
				$reservas[$i][1]=$hora_inicio;
				$reservas[$i][2]=$data_fim;
				$reservas[$i][3]=$hora_fim;
				$i++;
			} while ($i<0);
		}
	}	
?>	

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<title>Reserva de Equipamentos</title>
	</head>
	<body>
		<div id="dominio" style="margin-top: 1%; margin-left: 39%;">Reserva de Equipamentos</div>
		<div id="logo_usuario"><a href="../../inicio.php"><img src="../../imagens/logo.png"></a></div>
		<div id="corpo" style="margin-top:6%">

			<form  method="POST" action="../validacoes/teste1.php">

				Código do Item:<br>
				<input type="text" name= 'codigo' readonly="readonly" value=<?php echo $cod_item ?>>
				<br>
				<br>
				Data de Início:<br>
				<input type="date" name="dataInicio" required="required">
				<br>
				<br>
				Hora de Início:<br>
				<input type="time" name="horaInicio" required="required">
				<br>
				<br>
				Data de Fim:<br>
				<input type="date" name="dataFim" required="required">
				<br>
				<br>
				Hora de Fim:<br>
				<input type="time" name="horaFim" required="required">
				<br>
				<br>
				Descrição:<br>
				<textarea type="text" name="descricao" required="required"></textarea>
				<br>
				<br>
				<br>
				<input type="submit" value="Reservar">
				<br>
				<br>
				<input type="reset" value="Limpar">
								
			</form>
		</div>	

	
		<div id="tabela" style="margin-top: 43%;"> 
			<table border="1" width="100%" >
				<?php
				if ($i!=1) {
					for ($j=0; $j < sizeof($reservas); $j++) {
						echo "<tr>
							  <td>".$reservas[$j][0]."</td>
						  	  <td>".$reservas[$j][1]."</td>
						  	  <td>".$reservas[$j][2]."</td>
						  	  <td>".$reservas[$j][3]."</td>
						  	 </tr><br>";		
					}
				}else{
					echo "NENHUMA RESERVA REALIZADA NO MOMENTO!";
				}	
			mysqli_close($conexao);
			?>
		</table>
	</div>	


		<div id="dominio" style="margin-top: 40%; margin-left: 41%;">Horários Reservados</div>
		<div id="usuario_rodape" style="margin-top: 67%;">Usuário:</div>
			<div id="usuario" style="margin-top: 67%;"> <?php echo $_SESSION['nome_usuario'] ?> </div>
			<div id="hora" style="margin-top: 68%;"> <?php echo $hora; ?></div> 
			<div id="data" style="margin-top: 66.5%;"> <?php echo $date; ?></div>
			<div id="sair"> <a href="../../sair.php">Sair</a></div> 
			<div id="voltar"> <a href="javascript:history.back()">Voltar</a></div>
	</body>
</html>
















	