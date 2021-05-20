<?php

include "abrir_banco.php";

$txttarefa = $_POST["texttarefa"];
$tarefadata = $_POST["datatarefa"];




$executa = "INSERT INTO Agenda (AgeTarefa, AgeData, AgeStatus) VALUES ('$txttarefa','$tarefadata','Pendente')";


$query = $mysqli->query($executa);


echo "<fieldset>";
echo "<center><font color='#00b300'>";
echo "<img src='checked.jpg' width='10%'>";


echo "<h1>A tarefa foi salva com sucesso na sua agenda.<br>";
echo "<br><br><br>";
echo "</font></center>";
echo "<a href= 'inicio.php'>Voltar a pagina inicial</a></h1>";

echo "</fieldset>";
