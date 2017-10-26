<?php
class Conta {
    private $saldo;
    protected $estado;

    public function deposita($valor) {
      $this->saldo += $valor;
    }

    public function getSaldo() {
      return $this->saldo;
    }

    public function getEstado() {
    	return $this->estado;
    }

    public function setEstado($estado) {
    	$this->estado = $estado;
    }
}
