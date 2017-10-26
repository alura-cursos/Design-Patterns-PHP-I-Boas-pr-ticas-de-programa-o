<?php
class Multiplicador implements AcoesAoGerarNota {
    private $fator;

    public  function __construct($fator) 
    { 
        $this->fator = $fator; 
    }

    public function executa(NotaFiscal $notaFiscal) 
    {
        echo "<br />".$notaFiscal->getValorBruto() * $this->fator."<br />";
    }
}
