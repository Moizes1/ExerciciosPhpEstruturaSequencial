<?php 

/*	
	Estrutura sequencial 
	Exercicio 17 - retirado do site python.org.br

	Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros, que custam R$ 25,00.

    Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações:
    comprar apenas latas de 18 litros;
    comprar apenas galões de 3,6 litros;
    misturar latas e galões, de forma que o desperdício de tinta seja menor. Acrescente 10% de folga e sempre arredonde os valores para cima, isto é, considere latas cheias.
*/
		
	if(!empty($_POST['metros'])) {	

		$metro = $_POST['metros'];
		$metros = str_replace(',', '.', $metro);

		$qtdTinta = $metro / 6;
		$qtdLata = $qtdTinta / 18;

		$qtdGalao = $qtdTinta / 3.6;

		$valorLata = $qtdLata * 80.00;

		$valorGalao = $qtdGalao * 25.00;

	} else {
		header('Location: index.php');
	}
 ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Função php</title>
</head>
<body>

	<h3>Area pintada</h3>

	<div>
		<h4>Valor da lata 18LT: 80,00</h4>
		<h4>Valor da lata 3,6LT: 25,00</h4>

		<h4>Quantidade em litros: <?= number_format($qtdTinta,1) ?></h4>

		<h4>Comprando apenas latas: <?= ceil($qtdLata) ?>  Valor de: <?= number_format($valorLata) ?></h4>

		<h4>Comprando apenas galões: <?= ceil($qtdGalao) ?> Valor de: <?= number_format($valorGalao) ?></h4>
	</div>

</body>
</html>
