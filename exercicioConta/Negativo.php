<?php
class Negativo implements EstadoDaConta {
      public function saca(Conta $conta, $valor) {
        throw new Exception("Sua conta está no vermelho. Não é possível sacar!");
      }

      public function deposita(Conta $conta, $valor) {
        $conta->saldo += $valor * 0.95;
        if($conta->saldo > 0) $conta->estado = new Positivo();
      }

    }