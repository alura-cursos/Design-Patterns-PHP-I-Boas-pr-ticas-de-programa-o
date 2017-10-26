<?php
 class RespostaEmPorcento implements Resposta {
      private $outraResposta;

      function __construct(Resposta $outraResposta) {
        $this->outraResposta = $outraResposta;
      }

      public function responde(Requisicao $req, Conta $conta) {
        if($req->getFormato() == Formato::$PORCENTO) {
          echo $conta->getTitular() . "%" . $conta->getSaldo();
        }
        else {
          $outraResposta->responde($req, $conta);
        }
      }

      /*public function setProxima(Resposta $resposta) {
        $this->outraResposta= $resposta;
      }*/
    }
