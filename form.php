<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar o forumulário na mesma página</title>
</head>
<body>
   <form method="post">
   	   Nome: <input type="text" name="nome">
   	   Idade: <input type="number" name="idade">
   	   <button type="submit" name="sub"> Validar </button>
   </form>
   <?php
     if(isset($_POST['sub'])){
     	// $pessoa = $_POST['nome']; 
     	// $idade = $_POST['idade']; 

      //   extract($_POST); 

     	// echo $nome;  

     	// var_dump($_POST);

     	$post['nome'] = "Glívia"; 
     	$post['idade'] = "16"; 

     	var_dump($post); 
     }
   ?>
  <!--  <input type="text" name="nome" value="<?=$_POST['nome']?>;"> -->
   <br>
   <input type="text" name="nome" value="<?=$nome;?>">
</body>
</html>