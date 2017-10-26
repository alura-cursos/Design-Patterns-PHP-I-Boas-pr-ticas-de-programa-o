<?php
	class KCV extends TemplateDeImpostoCondicional {
	  function __construct($imposto = null){
		parent::__construct($imposto);
	  }
      public function deveUsarOMaximo(Orcamento $orcamento) {
        return $orcamento->getValor() > 500 && $this->temItemMaiorQue100ReaisNo($orcamento);
      }
      public function taxacaoMaxima(Orcamento $orcamento) { 
        return $orcamento->getValor() * 0.10;  
      }
      public function taxacaoMinima(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06;
      }

      private function temItemMaiorQue100ReaisNo(Orcamento $orcamento) {
            foreach ($orcamento->getItens() as $item) {
                if($item->getValor() > 100) return true;
            }
            return false;
      }
}