<?php 

include "abrir_banco.php";
//ele executa um select e orden os dados pelo codigo

$executa =" select * from Usuarios order by codigo";

$query = $mysqli->query($executa);

while ($dados=mysqli_fetch_object($query)) {
	echo "Codigo:".$dados->codigo  ."<br>";
	echo "Nome:" .$dados->nome ."<br>";
	echo "Email:".$dados->email  ."<br>";
	echo "Senha:" .$dados->senha ."<br><br>";
	echo "Status:" .$dados->status ."<br><br>";
}
$query->free();
//tem q limpar a memoria das consultas no servidor

echo "<br><br><br>";
echo "<a href= 'cadastro.html'>Voltar</a>";
?>