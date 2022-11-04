<?php

namespace Banco\Credito;

use Banco\Pessoa;

class CreditoTresMil extends Credito
{

    public function calculaCredito(Pessoa $pessoa)
    {
        $renda = $pessoa->renda;
        if($renda > 2000 && $renda <= 5000)
        {
            return 2000;
        }
        return $this->credito->calculaCredito($pessoa);
    }
}