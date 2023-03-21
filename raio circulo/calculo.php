<?php 
	/*
		Estrutura sequencial 
		Exercicio 6 - retirado do site python.org.br

		Faça um Programa que peça o raio de um círculo, calcule e mostre sua área. 
	*/

	if(!empty($_POST['raio'])) {
		$raioCirculo = $_POST['raio'];

		$raio = str_replace(',', '.', $raioCirculo);
		$pi = 3.14;

		$area = $pi * pow($raio, 2);
	}
 ?>
 <html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo media do aluno</title>
	
</head>
<body>

	 <h1>Area de um circulo é: <?= $area ?> </h1>
	 <a href="index.php">Retornar</a>


</body>
 