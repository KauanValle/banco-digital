<?php

namespace Banco\Contas;

use Banco\Banco\Banco;
use Banco\Pessoa;

class ContaCorrente implements ContasInterface
{

    public function cadastrarBanco(Pessoa $pessoa)
    {
        return new Banco("Conta Corrente", $pessoa->analiseDeCredito($pessoa), $this->calculaMensalidade($pessoa));
    }

    public function calculaMensalidade(Pessoa $pessoa)
    {
        return $pessoa->renda * 0.02;
    }
}