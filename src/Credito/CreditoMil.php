<?php

namespace Banco\Credito;

use Banco\Pessoa;

class CreditoMil extends Credito
{
    public function calculaCredito(Pessoa $pessoa)
    {
        if($pessoa->renda >= 0 && $pessoa->renda <= 1000)
        {
            return 500;
        }
        return $this->credito->calculaCredito($pessoa);
    }
}