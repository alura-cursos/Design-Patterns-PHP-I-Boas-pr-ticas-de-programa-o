<?php
	require "Imposto.php";
	require "TemplateDeImpostoCondicional.php";
	require "Orcamento.php";
	require "CalculadoraDeImpostos.php";
	require "ImpostoMuitoAlto.php";
	require "ICMS.php";
	require "ISS.php";
	require "KCV.php";
	require "ICCC.php";

	$reforma = new Orcamento(501);

	$calculadora = new CalculadoraDeImpostos();

	echo $calculadora->calcula($reforma,new ICMS(new ISS()));

	echo "<br/>";

	echo $calculadora->calcula($reforma,new ISS());

	echo "<br/>";

	echo $calculadora->calcula($reforma,new KCV());

	echo "<br/>";

	$novoImposto = new ICCC();

	echo $novoImposto->calcula($reforma);

	echo "<br/>";
	// exercicio Imposto Muito Alto
	$impostos = new ImpostoMuitoAlto(new ICMS());

	$orcamento = new Orcamento(500.0);

	echo $impostos->calcula($orcamento);