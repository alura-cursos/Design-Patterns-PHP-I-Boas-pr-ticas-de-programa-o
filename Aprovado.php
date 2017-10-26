<?php
	class Aprovado implements EstadoDeUmOrcamento{
		private $descontoAplicado = false;
	    public function aplicaDescontoExtra(Orcamento $orcamento) {
	       if(!$this->descontoAplicado) {
	         $orcamento->valor -= $orcamento->valor * 0.02;
	         $this->descontoAplicado = true;
	       }
	       else {
	         throw new Exception("Desconto já aplicado!");
	       }
	     }

		public function aprova(Orcamento $orcamento) {
			throw new Exception("Este orcamento ja se encontra aprovado");
		}

		public function reprova(Orcamento $orcamento) {
			throw new Exception("Um orcamento aprovado nao pode ser reprovado");
		}

		public function finaliza(Orcamento $orcamento) {
			$orcamento->setEstado(new Finalizado());
		}
	}