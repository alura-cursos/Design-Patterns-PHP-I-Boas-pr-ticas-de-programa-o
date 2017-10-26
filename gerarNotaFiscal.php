<?php
	date_default_timezone_get("Brazil/East");

	require "AcoesAoGerarNota.php";
	require "NotaFiscal.php";
	require "Item.php";
	require "Multiplicador.php";
	require "Impressora.php";
	require "NotaFiscalDao.php";
	require "EnviadorDeSms.php";
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
	
	// acoes
	$geradorDeNotas->addAcao(new Multiplicador(2));
	$geradorDeNotas->addAcao(new Multiplicador(3));
	$geradorDeNotas->addAcao(new Multiplicador(5.5));
	$geradorDeNotas->addAcao(new Impressora());
	$geradorDeNotas->addAcao(new NotaFiscalDao());
	$geradorDeNotas->addAcao(new EnviadorDeSms());

	$notaFiscal = $geradorDeNotas->build();

	echo "<pre>";

	var_dump($notaFiscal);
