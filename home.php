<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Página incial </title>
</head>
<body>
   <?php 
    $nome = "Gustavo José"; 
    $idade = 17;
    $salario = 1225.7;
   ?> 
   <table border="1">
   	<tr> <th>Funcionário</th> <th>Idade</th> <th>Remuneração</th> </tr>
   	<tr> <td><?php echo $nome; ?></td> 
   		 <td><?php echo $idade; ?></td> 
   		 <td><?php echo $salario ?></td></tr>
   </table>
   <hr> <!-- Sintaxe curta do php --> 
   <table border="1">
   	<tr> <th>Funcionário</th> <th>Idade</th> <th>Remuneração</th> </tr>
   	<tr> <td><?=$nome ?></td> 
   		 <td><?=$idade ?></td> 
   		 <td><?=$salario ?></td> </tr>
   </table>
</body>
</html>

