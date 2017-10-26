<?php
class EmAprovacao implements EstadoDeUmOrcamento{
	private $descontoAplicado = false;
	public function aplica(Orcamento $orcamento) {
	    if(!$this->descontoAplicado) {
	      $orcamento->valor -= $orcamento->valor * 0.05;
	      $this->descontoAplicado = true;
	    }
	    else {
	      throw new Exception("Desconto já aplicado!");
	    }
	}

	public function aprova(Orcamento $orcamento) {
		$orcamento->setEstado(new Aprovado());
	}

	public function reprova(Orcamento $orcamento) {
		$orcamento->setEstado(new Reprovado());
	}

	public function finaliza(Orcamento $orcamento) {
		throw new Exception("Apenas orcamentos aprovados podem ser finalizados");
	}
}