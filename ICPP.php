<?php
class ICPP extends TemplateDeImpostoCondicional {
      function __construct($imposto = null){
          parent::__construct($imposto);
      }

      protected function deveUsarMaximaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() > 500;
      }
      protected function maximaTaxacao(Orcamento $orcamento) { 
        return $orcamento->getValor() * 0.07;
      }
      protected function minimaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.05;
      }
    }