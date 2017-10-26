<?php
	require "Desconto.php";
	require "DescontoPorVendaCasada.php";
	require "DescontoPorCincoItens.php";
	require "DescontoPorMaisDeQuinhentosReais.php";
	require "SemDesconto.php";
	require "Orcamento.php";
	require "Item.php";

    $d1 = new DescontoPorCincoItens();
    $d2 = new DescontoPorMaisDeQuinhentosReais();
    $d3 = new DescontoPorVendaCasada();
    $d4 = new SemDesconto();

    $d1->setProximo($d2);
    $d2->setProximo($d3);
    $d3->setProximo($d4);

    $orcamento = new Orcamento(500.0);
    $orcamento->adicionaItem(new Item("LAPIS",1.00));
    $orcamento->adicionaItem(new Item("CANETA",1.50));

    $desconto = $d1->desconta($orcamento);
    echo $desconto;