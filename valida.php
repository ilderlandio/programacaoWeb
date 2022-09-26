<?php
$nome = $_POST['funcionario']; 
$salario = $_POST['salario']; 
$filhos = $_POST['filhos']; 

$cursos = ""; 

if(isset($_POST['eletric'])){
   $cursos .= "Eletricista <br>"; 
} 
if(isset($_POST['encanador'])){
  $cursos .= "Encanador <br>";
} 
if(isset($_POST['frentista'])){
	$cursos .= "Frentista <br>";
}
if(isset($_POST['informat'])){
	$cursos .= "Informática <br>";
}  

// if(empty($_POST['F'])){
// 	echo "Campo não marcado"; 
// }
// if(empty($_POST['M'])){
// 	echo "Campo não marcado"; 
// }

echo "Funcionario:".$nome."<br> Salário:".$salario." <br> Filhos:".$filhos." <br> Cursos: <br>".$cursos; 

echo "<hr>";

echo "Funcionario:$nome <br>
      Salário:$salario <br>
      Filhos: $filhos <br>
      Cursos:<br> $cursos";