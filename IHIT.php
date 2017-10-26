<?php
class IHIT extends TemplateDeImpostoCondicional {
  function __construct($imposto = null){
    parent::__construct($imposto);
  }
  
  public function deveUsarMaximaTaxacao(Orcamento $orcamento) {
    $noOrcamento = Array();

    foreach($orcamento->getItens() as $item) {
      if(in_array($item->getNome(),$noOrcamento)) return true;
      else $noOrcamento[] = $item->getNome();
    }

    return false;
  }
  protected function maximaTaxacao(Orcamento $orcamento) { 
    return $orcamento->getValor() * 0.13 + 100;
  }
  protected function minimaTaxacao(Orcamento $orcamento) {
    return $orcamento->getValor() * (0.01 * count($orcamento->getItens()));
  }
}