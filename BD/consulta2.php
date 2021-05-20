<?php 

include "abrir_banco.php";
//ele executa um select e orden os dados pelo codigo
$executa =" select * from contatos order by codigo";

$query = $mysqli->query($executa);

// criando a tabela para mostrar os dados
echo "<table border=1>";
echo "<tr><th>Codigo</th><th>Nome</th><th>E-mail</th><th>Telefone</th><th>Alterar</th><th>Excluir</th></tr>";

while ($dados=mysqli_fetch_object($query)) {
	echo "<tr><td>" .$dados->codigo      ."</td>";
	echo "    <td>" .$dados->nome        ."</td>";
	echo "    <td>" .$dados->email       ."</td>";
	echo "    <td>" .$dados->telefone    ."</td>";
	echo "    <td>Alterar</td>";
	echo "    <td>Excluir</td></tr>";
}
$query->free();
//tem q limpar a memoria das consultas no servidor

echo "</table>";

echo "<br><br><br>";
echo "<a href= 'cadastro.html'>Voltar</a>";
?>


