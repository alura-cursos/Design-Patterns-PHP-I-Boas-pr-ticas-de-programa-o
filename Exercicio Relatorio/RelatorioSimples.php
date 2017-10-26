<?php
class RelatorioSimples extends Relatorio {
  protected function cabecalho() {
    echo "Banco XYZ";
  }

  protected function rodape() {
   echo "(11) 1234-5678";
  }

  protected function corpo($contas) {
    foreach($contas as $conta) {
      echo $conta->getNome() ." - " . $conta->getSaldo();
    }
  }
}