<?php

namespace Banco\Credito;

use Banco\Pessoa;

abstract class Credito
{
    public ?Credito $credito;

    public function __construct(?Credito $proximoCredito)
    {
        $this->credito = $proximoCredito;
    }

    abstract public function calculaCredito(Pessoa $pessoa);
}