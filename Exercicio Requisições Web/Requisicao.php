<?php
class Requisicao {
      private $formato;
      function __construct($formato) {
        $this->formato = $formato;
      }

      public function getFormato(){
      	return $this->formato;
      }
    }