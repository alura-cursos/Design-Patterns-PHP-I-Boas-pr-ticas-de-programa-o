<?php
class DescontoPorMaisDeQuinhentosReais implements Desconto {
      private $proximo;

      public function setProximo(Desconto $proximo) {
        $this->proximo = $proximo;
      }

      public function desconta(Orcamento $orcamento) {
        if($orcamento->getValor() > 500) {
          return $orcamento->getValor() * 0.07;
        }
        else {
          return $this->proximo->desconta($orcamento);
        }
      }
    }