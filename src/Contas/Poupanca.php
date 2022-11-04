<?php

namespace Banco\Contas;

use Banco\Banco\Banco;
use Banco\Pessoa;

class Poupanca implements ContasInterface
{

    public function cadastrarBanco(Pessoa $pessoa)
    {
        $analiseCredito = $pessoa->analiseDeCredito($pessoa);
        return new Banco("Poupanca", $analiseCredito, $this->calculaMensalidade($pessoa));
    }

    public function calculaMensalidade(Pessoa $pessoa)
    {
        return $pessoa->renda * 0.0;
    }
}