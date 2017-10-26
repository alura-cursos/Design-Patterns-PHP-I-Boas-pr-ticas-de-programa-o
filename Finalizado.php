<?php
class Finalizado implements EstadoDeUmOrcamento{
	public function aplica(Orcamento $orcamento){
		throw new Exception("Um orcamento finalizado nao pode receber descontos");
	}

	public function aprova(Orcamento $orcamento) {
		throw new Exception("Apenas orcamentos em aprovacao podem ser aprovados");
	}

	public function reprova(Orcamento $orcamento) {
		throw new Exception("Este orcamento ja se encontra reprovado");
	}

	public function finaliza(Orcamento $orcamento) {
		throw new Exception("Apenas orcamentos aprovados podem ser finalizados");
	}
}