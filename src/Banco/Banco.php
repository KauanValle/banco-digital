<?php

namespace Banco\Banco;

class Banco
{
    public $tipoConta;
    public $limiteCredito;
    public $mensalidade;
    public $saldo;

    public function __construct($tipoConta, $limiteCredito, $mensalidade)
    {
        $this->tipoConta = $tipoConta;
        $this->limiteCredito = $limiteCredito;
        $this->mensalidade = $mensalidade;
        $this->saldo = 0;
    }

    public function saque($valorSaque)
    {
        if($valorSaque > $this->saldo)
        {
            throw new \DomainException("\n\n O valor do saque deve ser menor que o saldo disponivel na conta. \n SALDO: " . $this->saldo . "\n\n");
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar($valorDeposito)
    {
        $this->saldo += $valorDeposito;
    }
}