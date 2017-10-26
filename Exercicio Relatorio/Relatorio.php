<?php
abstract class Relatorio {
  protected abstract function cabecalho();
  protected abstract function rodape();
  protected abstract function corpo($contas);

  public function imprime($contas) {
    $this->cabecalho();
    $this->corpo($contas);
    $this->rodape();
  }
}