<?php
class Conta {
      private $titular;
      private $saldo;

      function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
      }

      public function getTitular() {
      	return $this->titular;
      }

      public function getSaldo() {
      	return $this->saldo;
      }

}