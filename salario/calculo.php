<?php 
	/*
	Estrutura sequencial 
	Exercicio 15 - retirado do site python.org.br

	Faça um Programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês, sabendo-se que são descontados 11% para o Imposto de Renda, 8% para o INSS e 5% para o sindicato, faça um programa que nos dê:

    salário bruto.
    quanto pagou ao INSS.
    quanto pagou ao sindicato.
    o salário líquido.
    calcule os descontos e o salário líquido, conforme a tabela abaixo:

    + Salário Bruto : R$
    - IR (11%) : R$
    - INSS (8%) : R$
    - Sindicato ( 5%) : R$
    = Salário Liquido : R$
*/

	$valor = $_POST['valorhora'];
	$horas = $_POST['horastrab'];
	$valorHora = (float)$valor;
	$horasTrabalhadas = (float)$horas;

	(float)$salarioBruto = $valorHora * $horasTrabalhadas;
	(float)$ir = $salarioBruto * (11 / 100);
	(float)$inss = $salarioBruto * (8 / 100);
	(float)$si = $salarioBruto * (5 / 100);
	(float)$salarioLiquido = $salarioBruto - $ir - $inss - $si;

 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo salario</title>
</head>
<body>

	<h3>Calculo salario</h3>

	<h4>Salario bruto: <?= $salarioBruto.' R$ ' ?></h4>
	<h4>IR 11%: <?= $ir.' R$ '?></h4>
	<h4>INSS 8%: <?= $inss.' R$ '?></h4>
	<h4>Sindicato 5%: <?= $si.' R$ '?></h4>
	<h4>Salario liquido: <?= $salarioLiquido.' R$ '?></h4>

</body>