<?php


include "abrir_banco.php";


$codigo = $_GET["txtcodigo"];



$executa =" UPDATE Agenda SET AgeStatus = 'Apagada' WHERE AgeID = $codigo";

$query = $mysqli->query($executa);

echo "<fieldset>";
echo "<center><font color='red'>";
echo "<img src='checked.jpg' width='10%'>";


echo "<h1>A tarefa selecionada foi marcada com o status: Apagada<br>";
echo "<br><br><br>";
echo "</font></center>";
echo "<a href= 'inicio.php'>Voltar</a></h1>";





echo "</fieldset>";

 ?>
