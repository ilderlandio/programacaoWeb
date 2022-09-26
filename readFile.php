<?php 

// $id = $_GET['id'];


$dados = file("cadastros/$id.txt");

// var_dump($dados); // ver info do vetor/array

$size = count($dados);  // pega o tamanho do vetor

for($i=0; $i < $size; $i++) { 
	echo $dados[$i]."<br>"; 
}

?> 