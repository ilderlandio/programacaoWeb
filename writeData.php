<?php
extract($_POST); // Tranforma automaticamente campos name em variáveis

echo $aluno."<br>"; 
echo $nota;  

$dado = $aluno."\r\n".$nota."\r\n";

$refFile = fopen("dados.txt","a+");

fwrite($refFile,$dado);

fclose($refFile);  

echo "<br> <a href='formWriteFile.php'> Cadastrar novamente </a>"; 


// conjunto de scripts que listar os arquivos da pasta cadastros

// criem um conjunto de links aqui que levem ao arquivo responsável 
// pela leitura de um arquivo

echo "<a href='gravaDados.php?id=$id'> Registrar informações </a>"; 




