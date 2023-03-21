<?php 
	/*
		Estrutura sequencial 
		Exercicio 13 - retirado do site python.org.br

		Tendo como dado de entrada a altura (h) de uma pessoa, construa um algoritmo que calcule seu peso ideal, utilizando as seguintes fórmulas:
		Para homens: (72.7*h) - 58
		Para mulheres: (62.1*h) - 44.7 
	*/
	!empty($_POST['peso']);

	$alt = $_POST['peso'];
	$altura = (float)$alt;

	$homen = 72.7 * $altura;
	$mulher = 62.1 * $altura;

	$pesoH = $homen - 58;
	$pesoM = $mulher - 44.7;
 ?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peso ideal</title>

</head>
<body>

    <h3>Peso ideal para homens: <?= $pesoH ?> Kg</h3>
    <h3>Peso ideal para mulheres: <?= $pesoM ?> Kg</h3>
    <a href="index.php">Voltar</a>

</body>
</html>

