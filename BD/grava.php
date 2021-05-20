<?php 

include "abrir_banco.php";

$txttarefa = $_POST["texttarefa"];
$tarefadata = $_POST["datatarefa"];




$executa = "INSERT INTO Agenda (AgeTarefa, AgeData, AgeStatus) VALUES ('$txttarefa','$tarefadata','Pendente')";


$query = $mysqli->query($executa);


echo "<fieldset>";
echo "<center><font color='red'>";
echo "<img src='checked.jpg' width='10%'>";


echo "<h1>Usuario adicionado com sucesso<br>";
echo "<br><br><br>";
echo "</font></center>";
echo "<a href= 'cadastro.html'>Voltar</a></h1>";





echo "</fieldset>";


