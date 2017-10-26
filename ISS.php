<?php
class ISS extends TemplateDeImpostoCondicional {
	function __construct($imposto = null){
		parent::__construct($imposto);
	}

	public function deveUsarOMaximo(Orcamento $orcamento){
		return $orcamento->getValor() > 300;
	}

	public function taxacaoMinima(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.1;
	}

	public function taxacaoMaxima(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.15;
	}
}