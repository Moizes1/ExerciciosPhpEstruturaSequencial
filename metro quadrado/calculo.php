<?php 
	/*
	Estrutura sequencial 
	Exercicio 5 - retirado do site python.org.br
	
	Faça um Programa que converta metros para centímetros.
	*/

	if(!empty($_POST['metros'])) {

		$metro = $_POST['metros'];
		$metros = str_replace(',', '.', $metro);

		$cm = $metros * 100;
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversão de metros para centimetros</title>
</head>
<body>

	<h3>Conversão de metros para centimetros</h3>
	<h3>A metragem <?= $metros ?> convertida em Cm é <?= $cm ?> centimetros</h3>
	<a href="index.php">Voltar</a>

</body>
