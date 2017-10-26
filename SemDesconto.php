<?php
class SemDesconto implements Desconto {

        public function desconta(Orcamento $orcamento) {
            return 0;
        }

        public function setProximo(Desconto $desconto) {
            // nao tem!
        }

    }