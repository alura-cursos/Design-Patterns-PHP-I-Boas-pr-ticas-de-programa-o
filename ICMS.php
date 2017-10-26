<?php
class ICMS extends TemplateDeImpostoCondicional {
	function __construct($imposto = null){
		parent::__construct($imposto);
	}

	public function deveUsarOMaximo(Orcamento $orcamento){
		return $orcamento->getValor() > 500;
	}

	public function taxacaoMinima(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.05;
	}

	public function taxacaoMaxima(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.15;
	}
}