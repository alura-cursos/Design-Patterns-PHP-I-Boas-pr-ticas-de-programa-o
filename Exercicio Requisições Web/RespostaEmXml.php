<?php
 class RespostaEmXml implements Resposta {
      private $outraResposta;
      
      function __construct(Resposta $outraResposta) {
        $this->outraResposta = $outraResposta;
      }

      public function responde(Requisicao $req, Conta $conta) {
        if($req->getFormato() == Formato::$XML) {
          echo "<conta><titular>" . $conta->getTitular() . "</titular><saldo>" . $conta->getSaldo() . "</saldo></conta>";
        }
        else {
          $outraResposta->responde($req, $conta);
        }
      }

      /*public function setProxima(Resposta $resposta) {
        $this->outraResposta= $resposta;
      }*/
    }