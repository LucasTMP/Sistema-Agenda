<?php

include "abrir_banco.php";
$codigo = $_POST["txtcodigo"];
$data = $_POST["txtdata"];
$tarefa = $_POST["txttarefa"];
$status = $_POST["txtstatus"];

$executa = "UPDATE agenda SET AgeData='$data', AgeTarefa='$tarefa', AgeStatus= '$status' where AgeID =$codigo";


$query = $mysqli->query($executa);


echo "<fieldset>";
echo "<center><font color='#00b300'>";
echo "<img src='checked.jpg' width='10%'>";

echo "<h1>Alteracao Realizada com Sucesso<br>";
echo "<br><br><br>";

echo"<form action='consultageral.php'>";
  echo  "<input type='submit' value='ver Agenda' />";
echo"</form>";
echo"<form action='inicio.php'>";
  echo  "<input type='submit' value='Voltar a pagina inicial' />";
echo"</form>";

echo "</fieldset>";
