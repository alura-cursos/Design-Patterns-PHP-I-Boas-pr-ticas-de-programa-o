<?php
	date_default_timezone_get("Brazil/East");

	require "NotaFiscal.php";
	require "Item.php";
	require "NotaFiscalBuilder.php";

	$geradorDeNotas = new NotaFiscalBuilder();

	$geradorDeNotas->comEmpresa("Alura");
	$geradorDeNotas->comCnpj("1234");
	$geradorDeNotas->addItem(new Item("Tijolo",250));
	$geradorDeNotas->addItem(new Item("Cimento 1kg",250));
	$geradorDeNotas->addItem(new Item("Cimento 1kg",250));
	$geradorDeNotas->addItem(new Item("Cimento 1kg",250));
	$geradorDeNotas->comObservacoes("Tijolos Amarelos");
	$geradorDeNotas->naData();
	
	$notaFiscal = $geradorDeNotas->gerar();

	echo "<pre>";

	var_dump($notaFiscal);
