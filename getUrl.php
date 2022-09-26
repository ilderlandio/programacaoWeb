<?php
echo "<h2> Método de requisição GET </h2>"; 

$idadePessoa = $_GET['idade'];
$salarioPessoa = $_GET['salario'];

// echo $_GET['idade']; // mesmo efeito
echo $idadePessoa."<br>";
//echo "<br>";   
echo $salarioPessoa; 

