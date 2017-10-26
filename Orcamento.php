<?php
class Orcamento {
      private $valor;
      private $itens = array();
      private $estado;

      function __construct($valor) {
          $this->valor = $valor;
          $this->estado = new EmAprovacao();
      }

      public function getValor() {
          return $this->valor;
      }

      public function setValor($valor) {
          return $this->valor = $valor;
      }

      public function getItens() {
          return $this->itens;
      }
      
      public function getEstado() {
          return $this->estado;
      }      

      public function setEstado($estado) {
          $this->estado = $estado;
      }

      public function adicionaItem(Item $item) {
          $this->itens[] = $item;
      }

      public function aplicaDesconto(){
          $this->estado->aplica($this);
      }

      public function aprova() {
        $this->estado->aprova($this);
      }

      public function reprova() {
        $this->estado->reprova($this);
      }

      public function finaliza() {
        $this->estado->finaliza($this);
      }
  }