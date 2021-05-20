
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Permanent+Marker" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One|Josefin+Slab|Luckiest+Guy|Patua+One" rel="stylesheet">
	<title>
		Web Agenda
	</title>
</head >

<body style="margin:0; background-image: url('bginicio.jpg'); background-position: center; background-repeat: no-repeat; background-size: 100% 100%;">

<h1 style="font-family: 'Permanent Marker', cursive; text-align:center; margin-top: 10px; color: white; font-size: 60px; margin-bottom:5px;">Web Agenda Pessoal</h1>
<p style="font-family: 'Patua One', cursive; margin-top: 5px;text-align:center; font-size: 22px; color: white;"> &nbsp;Organizando o seu futuro, para você aproveitar o presente.</p>
<p style="font-family: 'Luckiest Guy', cursive; margin-top: 36px; text-align:center; font-size: 26px; color: white;">Bem Vindo!</p>

<center>


<fieldset style="margin-top:50px; width: 60%; text-align: center;">
<legend style="font-family: 'Josefin Slab', serif; color: white; text-align:center; font-size: 20px; padding-left: 20%; padding-right: 20%;"><b>Registre abaixo uma nova tarefa:</b></legend>



<form name="criatarefa" method="post" action="gravatarefa.php">
	<hr style="margin-top: 10px;"/>
<hr style="margin-bottom: 35px;"/>

<table align="center">
	<tr style="height: 100px;">
	<th style="font-family: 'Josefin Slab', serif;color: white; font-size: 20px; width:280px;">Oque séra agendado:</th>
		<td><textarea placeholder="Descreva aqui a sua tarefa, seu compromisso ou seu objetivo." name="texttarefa" rows="4" cols="50"></textarea>
		</td>
</tr>
	<tr>
	<th style="font-family: 'Josefin Slab', serif; color: white; font-size: 20px;">Determine uma data final:</th>
<?php

	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Y-m-d');
	$date2 = date('H:i');
	$date3 = $date."T".$date2;

	?>

		<td>
			<?php echo "<input type='datetime-local' name='datatarefa' value='$date3' min='$date3'>" ?>

		</td>
	</tr>
	<tr>
</table>


   <br>
   <input style="margin-left: 30px;" type="button" onclick="vali()" value="Salvar na Agenda" name="Salvar na Agenda">
   <input style="margin-left: 30px;" type="reset" value="Limpar" name="limpar os Campos">
   <input style="margin-left: 30px;" type="button" onclick="location.href='consultageral.php';" value="Ver Agenda" />
	 <hr style="margin-top: 40px;"/>
	 <hr style="margin-bottom: 5px;"/>
</form>
</center>
</fieldset>

<script type="text/javascript">

	function vali(){
		if (document.criatarefa.texttarefa.value == ""){
			alert("Por favor, descreva a sua tarefa.");
       		 document.criatarefa.texttarefa.focus();
			return false;
		}
			document.criatarefa.submit();
	};

</script>

</body>
</html>
