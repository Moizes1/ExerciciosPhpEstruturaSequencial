<?php 
/*
	Estrutura sequencial 
	Exercicio 11 - retirado do site python.org.br

	João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar o rendimento diário de seu trabalho. Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo excedente. João precisa que você faça um programa que leia a variável peso (peso de peixes) e calcule o excesso. Gravar na variável excesso a quantidade de quilos além do limite e na variável multa o valor da multa que João deverá pagar. Imprima os dados do programa com as mensagens adequadas. 
*/

	if(!empty($_POST['kilos'])) {
		$kilo = $_POST['kilos'];
		$regulamento = 50;
		$kgSobra = $kilo - $regulamento;
		$multa = 4 * ($kilo - $regulamento);
	}

 ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pesca</title>
</head>
<body>

	<h3>Caso o peso ultrapasse o regulamento de 50kg é acrecentado uma multa de 4,00 em cada Kg</h3>

	<form action="pesca.php" method="post">
		<label>Digite a quantidade de quilos de peixe:</label>
		<input type="text" name="kilos">
		<button>Calcular</button>
	</form>

	<div>
		<?php if(!empty($kilo)) { ?>
			<?php if($kilo <= 50 ) { ?>
				<h4>Não ha multas a ser pagas</h4>
			<?php } else if($kilo > 50) { ?>
				<h4>O peso excedente foi: <?= $kgSobra ?> valora a ser pago: <?= number_format($multa,2) ?></h4>
			<?php } } ?>		
	</div>

</body>
</html>
	