<?php
class DescontoPorCincoItens implements Desconto {
      private $proximo;

      public function setProximo(Desconto $proximo) {
        $this->proximo = $proximo;
      }

      public function desconta(Orcamento $orcamento) {
        if(count($orcamento->getItens()) > 5) {
          return $orcamento->getValor() * 0.1;
        }
        else {
          return $this->proximo->desconta($orcamento);
        }
      }
    }
