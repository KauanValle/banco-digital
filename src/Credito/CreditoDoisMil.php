<?php

namespace Banco\Credito;

use Banco\Pessoa;

class CreditoDoisMil extends Credito
{

    public function calculaCredito(Pessoa $pessoa)
    {
        $renda = $pessoa->renda;
        if($renda > 1000 && $renda <= 2000)
        {
            return 1000;
        }
        return $this->credito->calculaCredito($pessoa);
    }
}