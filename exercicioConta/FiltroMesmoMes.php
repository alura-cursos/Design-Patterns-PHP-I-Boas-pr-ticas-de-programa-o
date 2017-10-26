<?php
class FiltroMesmoMes extends Filtro {
      function __construct($outroFiltro = null) {
        parent::__construct($outroFiltro);
      }

      public function filtra($contas) {
        $filtrada = Array();
        foreach($contas as $c) {
          if($c->getDataAbertura()->get("month") == date("m") && 
            $c->getDataAbertura()->get("year") == date("Y")) {
              $filtrada[] = $c;
          }
        }

        foreach($this->proximo($contas) as $c)  {
             $filtrada[] = $c;
        }
        return $filtrada;
      }
    }