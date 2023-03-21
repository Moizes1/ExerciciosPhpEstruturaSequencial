<?php 
	/*
	Estrutura sequencial 
	Exercicio 11 - retirado do site python.org.br

	Faça um Programa que peça 2 números inteiros e um número real. Calcule e mostre:
    o produto do dobro do primeiro com metade do segundo .
    a soma do triplo do primeiro com o terceiro.
    o terceiro elevado ao cubo. 

	*/
	if(!empty($_POST['numero1']) && !empty($_POST['numero2']) && !empty($_POST['numero3'])) {
		$num1 = $_POST['numero1'];
		$num2 = $_POST['numero2'];
		$num3 = $_POST['numero3'];
		
		$numero1 = (int)$num1;
		$numero2 = (int)$num2;		
		$numero3 = (float)$num3;

		$dobro = $numero1 * $numero1;
		$metade = $numero2 / 2;
		$triplo = $numero1 * 3;

		$produto = $dobro * $metade;
		$soma = $triplo + $numero3;
		$cubo = pow($numero3, 3);
	} 
 ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo media do aluno</title>
	
</head>
<body>

	 <h1>Operações com numeros </h1><br>
	 <h3>Os dois primeiros numeros sendo inteiros</h3>
	 <h3>O terceiro sendo um numero real</h3>

	 <p>A - O produto do dobro do primeiro com metade do segundo. <?= $produto ?> </p>
	 <p>B - A soma do triplo do primeiro com o terceiro. <?= $soma ?> </p>
	 <p>C - O terceiro elevado ao cubo. <?= $cubo ?> </p>
	 
</body>
</html>
