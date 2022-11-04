<?php

namespace Banco\Credito;

use Banco\Pessoa;

class SemCredito extends Credito
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaCredito(Pessoa $pessoa)
    {
        return 0;
    }
}