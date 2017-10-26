<?php
	class NotaFiscal {
		private $empresa;
		private $cnpj;
		private $itens;
		private $valorBruto;
		private $valorImpostos;
		private $observacoes;
		private $dataEmissao;

		function __construct($nomeEmpresa,$cnpj,$listaItens,$valorBruto,$valorImpostos,$observacoes,$data){
			$this->empresa = $nomeEmpresa;
			$this->cnpj = $cnpj;
			$this->itens = $listaItens;
			$this->valorBruto = $valorBruto;
			$this->valorImpostos = $valorImpostos;
			$this->observacoes = $observacoes;
			$this->dataEmissao = $data;
		}

		public function getEmpresa() {
			return $this->empresa;
		}

		public function getCnpj() {
			return $this->cnpj;
		}

		public function getValorBruto() {
			return $this->valorBruto;
		}
	}