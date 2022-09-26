<?php
echo "Programação Web"; 
echo "<br>"; // Quebra de linha
print("EEEP Amélia"); 

echo "<hr>"; 

$salario = 1225.7;
$idade = 17; 
$nome = "Gustavo José"; 

 echo "Funcionário:".$nome."<br>";
 echo "Idade:".$idade."<br>"; 
 echo 'Remuneração:'.$salario.'<br>';

 echo "<hr>"; 

echo "<h2> Informações  organizadas abaixo </h2>"; 

echo "<table border='1'>"; 
echo "<tr> <th>Funcionário</th> <th>Idade</th> <th>Remuneração</th> </tr>";
echo "<tr> <td> $nome </td> <td> $idade </td> <td> $salario </td> </tr>";  
echo "</table>"; 

echo "<hr>"; 

echo "<table border='1'>
	 <tr> <th>Funcionário</th> <th>Idade</th> <th>Remuneração</th> </tr>
	 <tr> <td> $nome </td> <td> $idade </td> <td> $salario </td> </tr>  
	 </table>";

