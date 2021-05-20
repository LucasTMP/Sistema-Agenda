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

 <body style="margin:0; background-image: url('bg6.jpg'); background-position: center; background-repeat: no-repeat; background-size: 100% 100%;">
 <center>
  <div style="border-bottom: 2px; border-bottom-style: solid; background-color:#1aa3ff;" >
  <h1 align='center' style=" margin-bottom: 10px; padding-top:1%; font-size: 50px;"> Web Agenda</h1>
  <p align='center' style="margin-top: 0; padding-bottom: 10px; font-size: 26px;"> Apague de sua agenda uma determinada tarefa.</p>
  </div>


<form method="GET" name="excluitarefa" action="excluir.php">
<input type="hidden" name="txtcodigo" value="<?php echo $codigo?>">

<table style="margin-top: 5%; background-color: white; border-style:solid; border-color: black; width:60%;" align="center">
	<tr style="height: 50px;">
		<th colspan="3" style="width:200px; height:90px;">Confira os dados da tarefa a ser apagada:<hr style="width:100.5%;margin-left:-3px; margin-top: 20px;"/></th>
	</tr>
	<tr style="height: 50px;">
	<th colspan="2" style="width:200px;">Nº da Anotação:</th>
		<td>
			<input type="text" name="txtid" value="<?php echo $ntarefa ?>" disabled="disabled">
		</td>

	</tr>
	<tr>
	<th colspan="2">Data de Termino:</th>
		<td>
			<input type="text" name="txtdata" value="<?php echo $dtarefa ?>" disabled="disabled">
		</td>
	</tr>
	<tr style="height: 100px;">
	<th colspan="2">Tarefa:</th>
		<td>
			<textarea name="txttarefa" rows="4" cols="51" disabled="disabled"><?php echo $ttarefa ?></textarea>
		</td>
	</tr>
	<tr>
	<th colspan="2" >Status:</th>
		<td>
			<input type="text" name="txtstatus" value="<?php echo $status ?>" disabled="disabled">
		</td>
	</tr>
	<tr style="height: 100px; text-align:center;" >
	<td colspan="3">
		<hr style="width:100.50%;margin-left:-3px;"/>
		<input type="button" style="margin-top: 20px; margin-left: 5px;" onclick="vali2()" value="Apagar Tarefa" name="enviar">
		   <input type="button" style="margin-left: 60px;" onclick="location.href='consultageral.php';" value="Ver Agenda" />
		   <input type="button" style="margin-left: 70px;" onclick="location.href='inicio.php';" value="Página Inicial" />
	</td>
	</tr>
</table>
   <br>

</form>


<script type="text/javascript">

	function vali2(){
		if (document.excluitarefa.txtdata.value == "" ||document.excluitarefa.txtcodigo.value == "" || document.excluitarefa.txtid.value == "" ||document.excluitarefa.txttarefa.value == "" || document.excluitarefa.txtstatus.value == ""){
			alert("NÃO ALTERE OS CAMPOS.");
       		 document.excluitarefa.txttarefa.focus();
			return false;
		};
			document.excluitarefa.submit();
	};

</script>
