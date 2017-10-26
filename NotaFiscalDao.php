<?php 
	class NotaFiscalDao implements AcoesAoGerarNota {
		public function executa(NotaFiscal $nf) {
			echo "<br /> Eu mandei para o banco <br />";
		}
	}