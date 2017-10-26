<?php
interface Resposta {
      public function responde(Requisicao $req, Conta $conta);
      //public function setProxima(Resposta $resposta);
    }

