<?php


include "abrir_banco.php";


$codigo = $_GET["codigo"];

$executa =" select * from agenda where AgeID = $codigo";

$query = $mysqli->query($executa);

while ($dados=mysqli_fetch_object($query)) {
	$ntarefa   =$dados->AgeID ;
	$dtarefa   =$dados->AgeData ;
	$ttarefa =$dados->AgeTarefa ;
	$status =$dados->AgeStatus;
}

$query->free();

 ?>

 <html>
 <head>
 <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Permanent+Marker" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Josefin+Slab|Luckiest+Guy|Patua+One" rel="stylesheet">
 	<title>
 		Editar Tarefa
 	</title>
 </head >

 <body style="margin:0; background-image: url('bg7.jpg'); background-position: center; background-repeat: no-repeat; background-size: 100% 100%;">
<center>
	<div style="border-bottom: 2px; border-bottom-style: solid; background-color:#1aa3ff;" >
	<h1 align='center' style=" margin-bottom: 10px; padding-top:1%; font-size: 50px;"> Web Agenda</h1>
	<p align='center' style="margin-top: 0; padding-bottom: 10px; font-size: 26px;"> Atualize os dados de uma determinada tarefa.</p>
	</div>

<form method="POST" name="editatarefa" action="gravaedicao.php">
<input type="hidden" name="txtcodigo" value="<?php echo $codigo?>">
<font color="RED">
</font>

<table  style="margin-top: 5%; background-color: white; border-style:solid; border-color: black; width:60%;" align="center">
	<tr style="height: 50px;">
		<th colspan="3" style="width:200px; height:90px;">Edite abaixo os dados da tarefa selecionada:<hr style="width:100.5%;margin-left:-3px; margin-top: 20px;"/></th>
	</tr>
	<tr style="height: 50px;">
	<th colspan="2" style="width:200px;">Nº da Anotação:</th>
		<td>
			<input type="text" name="txtid" value="<?php echo $ntarefa ?>" disabled="disabled">
		</td>

	</tr>
	<tr>
	<th colspan="2" >Data de Termino:</th>
		<td>
			<input type="text" name="txtdata" value="<?php echo $dtarefa ?>"> &emsp;  * Use a mesma Formatação.
		</td>
	</tr>
	<tr colspan="2" style="height: 100px;" >
	<th colspan="2">Tarefa:</th>
		<td>
			<textarea name="txttarefa" rows="4" cols="51"><?php echo $ttarefa ?></textarea>
		</td>
	</tr>
	<tr>
	<th colspan="2" >Status:</th>
		<td>
			<select name="txtstatus">

   			<option value="Cancelada">Cancelada</option>
   			<option value="Realizada">Realizada</option>
				<option value="Em Processo">Em Processo</option>
				<option value="Pendente">Pendente</option>
				<option value="Pausada">Pausada</option>
				<option value="<?php echo $status ?>" selected="selected"><?php echo $status ?></option>

			</select>
		</td>
	</tr>
	<tr style="height: 100px; text-align:center;" >
	<td colspan="3">
		<hr style="width:100.50%;margin-left:-3px;"/>
		<input type="button" style="margin-top: 20px; margin-left: 5px;" onclick="vali2()" value="Registrar Modificação" name="enviar">
		   <input type="button" style="margin-left: 60px;" onclick="location.href='consultageral.php';" value="Ver Agenda" />
		   <input type="button" style="margin-left: 70px;" onclick="location.href='inicio.php';" value="Página Inicial" />
	</td>
	</tr>
</table>
   <br>

	 </center>
</form>

</body>
</html>

<script type="text/javascript">

	function vali2(){
		if (document.editatarefa.txtdata.value == "" ||document.editatarefa.txtcodigo.value == "" || document.editatarefa.txtid.value == "" ||document.editatarefa.txttarefa.value == "" || document.editatarefa.txtstatus.value == ""){
			alert("Por favor, não deixei nenhum campo em branco.");
       		 document.editatarefa.txttarefa.focus();
			return false;
		};
			document.editatarefa.submit();
	};

</script>
