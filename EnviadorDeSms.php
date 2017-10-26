<?php
	class EnviadorDeSms implements AcoesAoGerarNota {
		public function executa(NotaFiscal $nf) {
			echo "<br />Enviei o sms! <br />";
		}
	}