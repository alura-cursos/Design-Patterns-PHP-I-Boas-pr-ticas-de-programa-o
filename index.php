<?php
	require "Item.php";
	require "Desconto.php";
	require "DescontoPorVendaCasada.php";
	require "DescontoPorCincoItens.php";
	require "DescontoPorMaisDeQuinhentosReais.php";
	require "SemDesconto.php";
	require "Imposto.php";
	require "TemplateDeImpostoCondicional.php";
	require "Orcamento.php";
	require "CalculadoraDeImpostos.php";
	require "ImpostoMuitoAlto.php";
	require "ICMS.php";
	require "ISS.php";
	require "KCV.php";
	require "ICCC.php";
	require "EstadoDeUmOrcamento.php";
	require "Aprovado.php";
	require "EmAprovacao.php";
	require "Reprovado.php";
	require "Finalizado.php";

	$reforma = new Orcamento(490);

	echo $reforma->getValor()."<br />";

	$reforma->aplicaDesconto();

	echo $reforma->getValor()."<br />";

	$reforma->aprova();

	$reforma->aplicaDesconto();

	echo $reforma->getValor()."<br />";

	$reforma->finaliza();

	$reforma->aplicaDesconto();

	echo $reforma->getValor()."<br />";