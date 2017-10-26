<?php
abstract class TemplateDeImpostoCondicional extends Imposto {
	
	function __construct($imposto = null){
		parent::__construct($imposto);
	}

	public function calcula(Orcamento $orcamento) {
		if($this->deveUsarOMaximo($orcamento)){
			return $this->taxacaoMaxima($orcamento) + $this->calculaOutroImposto($orcamento);
		} else {
			return $this->taxacaoMinima($orcamento) + $this->calculaOutroImposto($orcamento);
		}
	}

	public abstract function deveUsarOMaximo(Orcamento $orcamento);
	public abstract function taxacaoMinima(Orcamento $orcamento);
	public abstract function taxacaoMaxima(Orcamento $orcamento);
}