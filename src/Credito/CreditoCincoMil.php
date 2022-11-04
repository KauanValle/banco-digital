<?php

namespace Banco\Credito;

use Banco\Pessoa;

class CreditoCincoMil extends Credito
{

    public function calculaCredito(Pessoa $pessoa)
    {
        $renda = $pessoa->renda;

        if($renda > 5000 && $renda <= 10000)
        {
            return 5000;
        }
        return $this->credito->calculaCredito($pessoa);
    }
}