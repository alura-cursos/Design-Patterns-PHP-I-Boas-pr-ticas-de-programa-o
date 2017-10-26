<?php
class ImpostoMuitoAlto extends Imposto {

    function __construct(Imposto $imposto = null) {
        parent::__construct($imposto);
    }

    public function calcula(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.2 + $this->calculaOutroImposto($orcamento); 
    }

}