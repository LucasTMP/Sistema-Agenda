<?php

include "abrir_banco.php";

$executa =" select * from agenda where AgeStatus = 'Realizada' order by AgeData";

$query = $mysqli->query($executa);

?>

<body style="margin:0; background-image: url('bg4.jpg'); background-position: center; background-repeat: no-repeat; background-size: 100% 100%;">
<div>


  <div style="border-bottom: 2px; border-bottom-style: solid; background-color:#1aa3ff;" >
  <h1 align='center' style=" margin-bottom: 10px; padding-top:1%; font-size: 50px;"> Web Agenda</h1>
  <p align='center' style="margin-top: 0; padding-bottom: 10px; font-size: 26px;"> Os registros da sua agenda estão listados abaixo. </p>
  </div>

<table style='background-color:white; margin:5%; margin-bottom: 40px;' border="1">
  <tr style="background-color: #cecece; font-size: 20px;">
   <th>Nº da Anotação</th>
   <th colspan="2">Data de Termino</th>
   <th colspan="2">Tarefa Realizadas</th>
	 <th>Status</th>
   <th>Alterar</th>
   <th>Excluir</th>
  </tr>

<?php

while ($dados=mysqli_fetch_object($query)) {
  $cod = $dados->AgeID;
  echo "<tr> <td style='width: 100px;' align='center'>".$dados->AgeID  ."</td>";
  echo "<td colspan='2' align='center' style='width: 170px;'>" .$dados->AgeData ."</td>";
  echo "<td align='left' style='width: 55%;' colspan='2'>".$dados->AgeTarefa  ."</td>";
  echo "<td align='center' style='width: 80px;' >" .$dados->AgeStatus ."</td>";
  echo "<td align='center' style='width:66px;'><a href='editar.php?codigo=$cod' ><img src='editar.jpg' width='50%'
 > </a></td>";
  echo "<td align='center' style='width:66px;'><a href='confexcluir.php?codigo=$cod' ><img src='excluir.jpg' width='50%'
 > </a></td>";

}

$query->free();

echo "</table>";
echo"<form align='center' action='inicio.php'>";
  echo  "<input style='margin-top:10px; margin-right: 120px;' type='submit' value='Página Inicial' />";
  echo  "<input style='margin-top:10px; margin-bottom: 60px;' onclick=location.href='consultageral.php';  type='button' value='Voltar' />";
echo"</form>";

 ?>

</div>
</body>
