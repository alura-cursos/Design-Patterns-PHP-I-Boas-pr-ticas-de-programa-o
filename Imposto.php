<?php
abstract class Imposto {
  protected $outroImposto;

  function __construct($imposto = null){
  	$this->outroImposto = $imposto;
  }

  public abstract function calcula(Orcamento $orcamento);

  public function calculaOutroImposto(Orcamento $orcamento) {
  	if(is_null($this->outroImposto)) return 0;

  	return $this->outroImposto->calcula($orcamento);
  }
}

