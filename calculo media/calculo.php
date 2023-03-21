<?php 
	/*
		Estrutura sequencial 
		Exercicio 4 - retirado do site python.org.br
		
		Faça um Programa que peça as 4 notas bimestrais e mostre a média.
	*/
	if(!empty($_POST['nota1']) && !empty($_POST['nota2']) && !empty($_POST['nota3']) && !empty($_POST['nota4'])) {

		$not1 = $_POST['nota1'];
		$not2 = $_POST['nota2'];
		$not3 = $_POST['nota3'];
		$not4 = $_POST['nota4'];

		$nota1 = (float)$not1;
		$nota2 = (float)$not2;
		$nota3 = (float)$not3;
		$nota4 = (float)$not4;

		$nota = $nota1 + $nota2 + $nota3 + $nota4;
			
		$media = $nota / 4;
	} else {
		header('Location: index.php');
	}
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo media do aluno</title>
	
</head>
<body>

	 <h1>A média do aluno foi: <?= $media ?> </h1>
	 <a href="index.php">Retornar</a>
</body>
</html>
