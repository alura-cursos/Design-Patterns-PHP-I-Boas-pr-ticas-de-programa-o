<?php
	class NotaFiscalBuilder {
		private $empresa;
		private $cnpj;
		private $itens;
		private $valorBruto;
		private $valorImpostos;
		private $observacoes;
		private $dataEmissao;
		private $acoesAoGerar;

		function _construct($lista = null) {
			$this->valorBruto = 0;
			$this->valorImpostos = 0;
			$this->itens = array();
			$this->acoesAoGerar = is_null($lista) ? array() : $lista;
		}

		public function comEmpresa($nomeEmpresa) {
			$this->empresa = $nomeEmpresa;
		}

		public function comCnpj($cnpj) {
			$this->cnpj = $cnpj;
		}

		public function addItem(Item $novoItem) {
			$this->itens[] = $novoItem;
			$this->valorBruto += $novoItem->getValor();
			$this->valorImpostos += $novoItem->getValor() * 0.2;
		}

		public function comObservacoes($observacoes){
			$this->observacoes = $observacoes;
		}

		public function naData($data = null){
			if(is_null($data)){
				$this->dataEmissao = date("Y-m-d h:i:s");
			} else {
				$this->dataEmissao = $data;
			}
		}

		public function build() {
			$nf = new NotaFiscal($this->empresa,$this->cnpj,$this->itens,$this->valorBruto,$this->valorImpostos,$this->observacoes,$this->dataEmissao);

			foreach ($this->acoesAoGerar as $acao) {
				$acao->executa($nf);
			}

			return $nf;
		}

		public function addAcao(AcoesAoGerarNota $acao){
			$this->acoesAoGerar[] = $acao;
 		}
	}