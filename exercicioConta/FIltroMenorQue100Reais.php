<?php
class FiltroMenorQue100Reais extends Filtro {
      function __construct($outroFiltro = null) {
        parent::__construct($outroFiltro);
      }

      public function filtra($contas) {
        $filtrada = new Array();
        foreach($contas as $c) {
          if($c->getValor() < 100) $filtrada[] = $c;
        }

        foreach($this->proximo($contas) as $c)  {
             $filtrada[] = $c;
        }

        return $filtrada;
      }
    }