<html> 
<head> 
<title>Relogio com Javascript</title> 
<script language="JavaScript"> 
function moveRelogio(){ 
momentoAtual = new Date() 
hora = momentoAtual.getHours() 
minuto = momentoAtual.getMinutes() 
segundo = momentoAtual.getSeconds() 

 	str_segundo = new String (segundo) 
   	if (str_segundo.length == 1) 
      	segundo = "0" + segundo ;

   	str_minuto = new String (minuto) 
   	if (str_minuto.length == 1) 
      	minuto = "0" + minuto;

   	str_hora = new String (hora) 
   	if (str_hora.length == 1) 
      	hora = "0" + hora;

horaImprimivel = hora + ":" + minuto + ":" + segundo;

document.form_relogio.relogio.value = horaImprimivel 

setTimeout("moveRelogio()",1000) 
} 
</script> 
</head> 

<body onload="moveRelogio()"> 

Vemos aqui o relógio funcionando... 

<form name="form_relogio"> 
<input type="text" name="relogio" size="10"  style="border: 0px;" > 
</form> 

aaaa

</body> 
</html>